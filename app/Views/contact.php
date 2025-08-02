<!-- HEADER -->
    <?= $header ?>
<!-- HEADER -->

<!-- CONTACTS -->
<div class="contacts">
    <div class="center">
        <h2 class="contacts-title">
            Contacts
        </h2>

        <div class="contacts__row">
            <div class="contacts__item">
                <p class="contacts__item-title">
                    Please, contact us via
                </p>

                <div class="contacts__item__list">
                    <div class="contacts__item__list__box">
                        <p>Emails</p>

                        <span>PR:</span>
                        <a href="mailto:pr@studioshoo.com">
                            pr@studioshoo.com
                        </a>

                        <span>Suppliers:</span>
                        <a href="mailto:supply@studioshoo.com">
                            supply@studioshoo.com
                        </a>

                        <span>General Enquiries:</span>
                        <a href="mailto:info@studioshoo.com">
                            info@studioshoo.com
                        </a>

                        <span>Jobs & Internships:</span>
                        <a href="mailto:hr@studioshoo.com">
                            hr@studioshoo.com
                        </a>
                    </div>
                    <div class="contacts__item__list__box">
                        <p>Telephone numbers</p>

                        <span>Milan, Italy</span>
                        <a href="tel:+39 351 591 5960">
                            +39 351 591 5960
                        </a>

                        <span>Yerevan, Armenia</span>
                        <a href="tel:+374 55 664 651">
                            +374 55 664 651
                        </a>
                    </div>
                    <div class="contacts__item__list__box">
                        <p>Follow us</p>

                        <a href="#" target="_blank">Instagram</a>
                        <a href="#" target="_blank">LinkedIn</a>
                        <a href="#" target="_blank">Behance</a>
                        <a href="#" target="_blank">Facebook</a>
                    </div>
                    <div class="contacts__item__list__box">
                        <p>Write us</p>

                        <a href="#" target="_blank">WhatsApp</a>
                        <a href="#" target="_blank">Telegram</a>
                    </div>
                </div>
            </div>
            <div class="contacts__item">
                <div class="contacts__item__form">
                    <p class="contacts__item__form-title">
                        How can we help?
                    </p>

                    <form class="contacts__item-form">
                        <div class="contacts__item__form__selects">
                            <div class="form_radio_btn">
                                <input id="rad-1" type="radio" name="radio" value="I need a design" checked>
                                <label for="rad-1" class="btn-version"></label>
                            </div>
                            <div class="form_radio_btn">
                                <input id="rad-2" type="radio" name="radio" value="I want to work here">
                                <label for="rad-2" class="btn-version"></label>
                            </div>
                            <div class="form_radio_btn">
                                <input id="rad-3" type="radio" name="radio" value="Something else">
                                <label for="rad-3" class="btn-version"></label>
                            </div>
                        </div>

                        <label>
                            <input type="text" name="name" placeholder="Name">
                        </label>
                        <label>
                            <input type="text" name="phone" placeholder="Telephone">
                        </label>
                        <label>
                            <textarea name="message" placeholder="Your message"></textarea>
                        </label>

                        <div class="contacts__item__form-upload">
                            <p class="btn-version">
                                <input type="file" name="pdf" oninput="checkFileSize(this)" accept="application/pdf">
                            </p>
                            <span>PDF file up to 10 MB</span>
                        </div>

                        <button class="btn-version"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACTS -->

<!-- SUCCESS -->
<div class="success">
    <div class="success__row">
        <button></button>
        <h2>
            Thank you for message!
        </h2>
        <p>
            We will reply to you as soon as possible
        </p>
    </div>
</div>
<!-- SUCCESS -->

<!-- MODAL -->
<div class="modal">
    <div class="modal__row">
        <button class="modal-close"></button>

        <div class="contacts__item__form">
            <p class="contacts__item__form-title">
                How can we help?
            </p>

            <form class="contacts__item-form">
                <div class="contacts__item__form__selects">
                    <div class="form_radio_btn">
                        <input id="radio-1" type="radio" name="radio" value="I need a design" checked>
                        <label for="radio-1" class="btn-version"></label>
                    </div>
                    <div class="form_radio_btn">
                        <input id="radio-2" type="radio" name="radio" value="I want to work here">
                        <label for="radio-2" class="btn-version"></label>
                    </div>
                    <div class="form_radio_btn">
                        <input id="radio-3" type="radio" name="radio" value="Something else">
                        <label for="radio-3" class="btn-version"></label>
                    </div>
                </div>

                <label>
                    <input type="text" name="name" placeholder="Name">
                </label>
                <label>
                    <input type="text" name="phone" placeholder="Telephone">
                </label>
                <label>
                    <textarea name="message" placeholder="Your message"></textarea>
                </label>

                <div class="contacts__item__form-upload">
                    <p class="btn-version">
                        <input type="file" name="pdf" oninput="checkFileSize(this)" accept="application/pdf">
                    </p>
                    <span>PDF file up to 10 MB</span>
                </div>

                <button class="btn-version"></button>
            </form>
        </div>
    </div>
</div>
<!-- MODAL -->

<!-- JS FILES -->
<script src="/js/main.js"></script>
</body>
</html>
