<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule('subscribe');

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

class CSubscribeComponent extends CBitrixComponent
{

	public function executeComponent()
    {
		global $APPLICATION;
        $request = $this->request;
        if($subEmail = $request->getPost('email_subscribe')) {
            $APPLICATION->RestartBuffer();
            header('Content-Type: application/json');
			$rsSubscr = CSubscription::GetList(array(), array("EMAIL"=>$subEmail));
			if($arSubscr = $rsSubscr->Fetch()){
				$arResult['ERROR'] = 'Вы уже подписаны!';
			} else {
				$arFields = Array(
					"FORMAT" => "html",
					"EMAIL" => $subEmail,
					"ACTIVE" => "Y",
					"RUB_ID" => array(1)
				);
				$subscr = new CSubscription;
				$ID = $subscr->Add($arFields);
				if($ID>0) {
					$arResult['SUCCESS'] = 'Вы оформили подписку!';
					$promoCode = $this->createPromo();
					if($promoCode[0] == false){
						$arResult['ERROR'] = 'Произошла ошибка при генерации промокода' . $promoCode[1];
					} else {
						$this->sendPromocodeMail($subEmail, $promoCode[1]);
						$arResult['PROMOCODE'] = $promoCode[1];
					}
				}else{
					$arResult['ERROR'] = 'Произошла ошибка: '.$subscr->LAST_ERROR;
				}
			}
			echo json_encode($arResult);
            die();
        }
    $this->includeComponentTemplate();
    }

    public function createPromo(){
		if (CModule::IncludeModule("sale"))
		{
			$COUPON = \Bitrix\Sale\Internals\DiscountCouponTable::generateCoupon(true);

			$arCouponFields = array(
				"DISCOUNT_ID" => "1",
				"ACTIVE" => 'Y',
				'COUPON' => $COUPON,
				'TYPE' => \Bitrix\Sale\Internals\DiscountCouponTable::TYPE_ONE_ORDER,
				'MAX_USE' => 1,
				'DATE_APPLY' => false
			);


			$couponsResult = \Bitrix\Sale\Internals\DiscountCouponTable::add($arCouponFields);
			if (!$couponsResult->isSuccess()){
				$errors = $couponsResult->getErrorMessages();
				return array(false, $errors);
			}else{
				return array(true, $COUPON);
			};
		}
	}

	public function sendPromocodeMail($email, $promocode){
		$arFields['EMAIl'] = $email;
		$arFields['PROMOCODE'] = $promocode;
		$emailSend = CEvent::Send('NEW_SUBSCRIBE', SITE_ID, $arFields);
	}
}
;?>