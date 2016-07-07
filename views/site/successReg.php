<div id="success_page">
    <div class="container">
        <div id="success_page_wrapper" class="w-85 m-auto text-center">
            <img src="/img/success-image.png" class="img-response mtop-40 mtop-lg-80">
            <div class="f-34 lh-1-4 fw-semi-bold mtop-40">Спасибо за регистрацию!<br>
                Мы отправили вам письмо.
            </div>
            <div class="f-14 c-gray lh-1-4 fw-light mtop-40">
                Не пришло письмо?<br>
                <a href="<?= Yii::$app->urlManager->createUrl(['partner/resend-confirm']) ?>">По клику</a> отправляем письмо конфирмации повторно,<br>
                но не чаще 1 раза в 1 час.

            </div>
        </div>
    </div>
</div>