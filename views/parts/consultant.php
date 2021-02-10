<?php
global $Languager;
global $lang;
?>
<div class="consultant">
    <div class="consultant-head">
        <button class="consultant-icon" data-click-action="consultant:showHide">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.3924 18.2089C19.3435 15.219 16.2866 14.3357 14.0544 13.6907C13.794 13.6154 13.5435 13.543 13.3088 13.4708V12.2373C13.7651 11.9513 14.165 11.5832 14.4876 11.1538H15.8473C16.5127 11.1538 17.054 10.6124 17.054 9.94705V8.48628C17.1347 8.29824 17.1795 8.0913 17.1795 7.87401V7.4197C17.1795 7.20262 17.1347 6.99581 17.054 6.80791V6.05432C17.054 2.71598 14.3381 0 10.9998 0C7.66217 0 4.94684 2.71598 4.94684 6.05436V6.78638C4.94684 6.79214 4.94748 6.79768 4.9477 6.8034C4.8658 6.99255 4.82016 7.20086 4.82016 7.41974V7.87405C4.82016 8.73287 5.51832 9.43159 6.37645 9.43159H6.73155C6.9775 10.611 7.70157 11.6169 8.69085 12.2371V13.4708C8.45611 13.543 8.20568 13.6154 7.94525 13.6907C5.7131 14.3357 2.65612 15.2191 2.60722 18.2089C2.60718 18.2113 2.60718 18.2136 2.60718 18.216V21.5703C2.60718 21.8076 2.79959 22 3.03687 22H4.31081C4.54808 22 4.7405 21.8076 4.7405 21.5703C4.7405 21.333 4.54808 21.1406 4.31081 21.1406H3.46651V18.2196C3.4846 17.1764 3.96379 16.3944 4.97446 15.7587C5.64139 15.3392 6.45672 15.0403 7.26041 14.7902L8.29858 16.813C8.4143 17.0384 8.71057 17.115 8.92112 16.973L9.38402 16.6607L9.78144 18.1545L9.10051 21.1406H8.16929C7.93202 21.1406 7.7396 21.333 7.7396 21.5703C7.7396 21.8076 7.93202 22 8.16929 22H18.9628C19.2001 22 19.3925 21.8076 19.3925 21.5703V18.2159C19.3925 18.2136 19.3925 18.2113 19.3924 18.2089V18.2089ZM13.8158 14.5162C13.8442 14.5244 13.8729 14.5328 13.9015 14.541L13.1587 15.9897L11.7686 15.0523L12.9464 14.2579C13.22 14.344 13.511 14.4281 13.8158 14.5162ZM11.0001 15.5706L11.8617 16.1517L11.4453 17.7169H10.5543L10.138 16.1521L11.0001 15.5706ZM11 14.5341L9.55018 13.5564V12.6519C10.004 12.8123 10.4917 12.9004 10.9998 12.9004C11.5078 12.9004 11.9956 12.8126 12.4494 12.6522V13.5564L11 14.5341ZM14.5005 6.13295C14.4946 6.12922 14.4887 6.12548 14.4828 6.12174C13.6012 5.56048 12.8397 5.07575 11.6465 5.41713C11.6354 5.42031 11.6244 5.42392 11.6136 5.42796C11.3607 5.52297 11.1307 5.61153 10.9082 5.69716C9.54937 6.22022 8.80747 6.50588 7.49915 6.4691V6.125C7.49915 4.19467 9.06953 2.62424 10.9998 2.62424C12.93 2.62424 14.5004 4.19467 14.5004 6.125V6.13295H14.5005ZM16.1946 9.94705C16.1946 10.1386 16.0388 10.2944 15.8473 10.2944H14.991C15.1119 10.0203 15.2056 9.7316 15.2681 9.43155H15.6232C15.825 9.43155 16.0176 9.39253 16.1947 9.32228V9.94705H16.1946ZM16.3201 7.87401C16.3201 8.25897 16.0075 8.57217 15.6232 8.57217H15.3595C15.3595 8.56151 15.3599 6.72274 15.3599 6.72274H15.6232C16.0075 6.72274 16.3202 7.03539 16.3202 7.4197V7.87401H16.3201ZM6.37645 8.57221C5.99218 8.57221 5.67954 8.25901 5.67954 7.87405V7.41974C5.67954 7.03543 5.99214 6.72279 6.37645 6.72279H6.63981C6.63981 6.72279 6.64015 8.56156 6.64024 8.57221H6.37645ZM6.64785 5.86337H6.37641C6.17553 5.86337 5.98368 5.90204 5.80725 5.97165C5.85163 3.14515 8.1637 0.859378 10.9998 0.859378C13.8368 0.859378 16.1495 3.14541 16.1936 5.97212C16.0168 5.90221 15.8245 5.86337 15.6232 5.86337H15.3518C15.216 3.58051 13.3161 1.76486 10.9998 1.76486C8.68354 1.76486 6.78363 3.58056 6.64785 5.86337ZM7.52501 8.95829C7.52497 8.95786 7.52489 8.95743 7.52484 8.957C7.50856 8.82023 7.49919 8.68135 7.49919 8.54029V7.32843C8.96929 7.36427 9.84624 7.02688 11.2169 6.49922C11.4328 6.41612 11.6559 6.33022 11.899 6.23883C12.7107 6.01225 13.1777 6.30964 14.0214 6.84671C14.1678 6.93991 14.3283 7.04205 14.5005 7.14693V8.54029C14.5005 9.17928 14.3276 9.77826 14.0273 10.2945H10.9998C10.7626 10.2945 10.5701 10.4868 10.5701 10.7241C10.5701 10.9615 10.7626 11.1538 10.9998 11.1538H13.3255C12.7066 11.7052 11.8919 12.0411 10.9998 12.0411C9.21107 12.041 7.73234 10.6921 7.52501 8.95829V8.95829ZM8.84201 15.9897L8.09839 14.5409C8.12684 14.5327 8.15554 14.5244 8.18381 14.5162C8.48864 14.4281 8.77962 14.3439 9.05333 14.2578L10.2316 15.0524L8.84201 15.9897ZM9.98198 21.1406L10.5667 18.5762H11.433L12.0187 21.1406H9.98198ZM18.5331 21.1406H12.9002L12.2182 18.1544L12.6158 16.6601L13.0798 16.973C13.2905 17.115 13.5867 17.0384 13.7024 16.8128L14.7394 14.7903C15.5431 15.0404 16.3584 15.3392 17.0252 15.7587C18.0359 16.3944 18.5151 17.1764 18.5332 18.2196V21.1406H18.5331Z" fill="black"></path>
                <path d="M16.8361 18.9921H14.6707C14.4334 18.9921 14.241 19.1844 14.241 19.4218C14.241 19.6591 14.4334 19.8514 14.6707 19.8514H16.8361C17.0734 19.8514 17.2658 19.6591 17.2658 19.4218C17.2658 19.1844 17.0735 18.9921 16.8361 18.9921Z" fill="black"></path>
                <path d="M6.23999 21.1406C6.00272 21.1406 5.8103 21.333 5.8103 21.5703C5.8103 21.8076 6.00272 22 6.23999 22H6.24119C6.47847 22 6.67024 21.8076 6.67024 21.5703C6.67024 21.333 6.47726 21.1406 6.23999 21.1406Z" fill="black"></path>
            </svg>
        </button>
        <div class="consultant-info">
            <h5 class="consultant-info-title"><?=$Languager->getTranslateToFrontFromId(188,$lang);?></h5>
            <span class="consultant-info-subtitle"><?=$Languager->getTranslateToFrontFromId(189,$lang);?>!</span>
        </div>
        <button class="consultant-close" data-click-action="consultant:showHide"></button>
        <div class="consultant-status"></div>
    </div>
    <div class="consultant-body">
        <div class="consultant-desc">
            <h6 class="consultant-desc-title"><?=$Languager->getTranslateToFrontFromId(190,$lang);?>?</h6>
            <span class="consultant-desc-subtitle"><?=$Languager->getTranslateToFrontFromId(191,$lang);?></span>
        </div>
        <div class="consultant-chat"></div>
        <form class="consultant-form" data-submit-action="consultant:messagePrepare">
            <div class="consultant-form-placeholder active">Введите сообщение</div>
            <div class="consultant-form-input" contenteditable data-input-action="consultant:removePlaceholder"></div>
            <button class="consultant-form-button">
                <svg viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.56812 7.18205L8.75008 4.00008L5.56812 0.818115" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M1.25 4H8.75" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
        </form>
        <form class="consultant-reg" data-submit-action="consultant:registration">
            <input class="consultant-reg-name" placeholder="Как вас зовут?">
            <input class="consultant-reg-mail" placeholder="mail@domain.kz">
            <button class="consultant-reg-btn">Отправить</button>
        </form>
    </div>
</div>