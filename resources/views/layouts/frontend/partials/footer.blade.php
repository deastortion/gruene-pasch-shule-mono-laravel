<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__col">
                <div class="footer__text">
                    <p>
                        @lang('footer.resources-notification')
                    </p>
                    <p>
                        @deastortion 2021
                    </p>

                </div>
                <div class="languages">
                    <form action="/languages/change" method="GET" id="language">
                        <input type="submit" id="ru" name="lang" value="ru"
                            class="footer__lang {{ session()->get('locale') == 'ru' ? 'selected' : '' }}">
                        <input type="submit" id="en" name="lang" value="en"
                            class="footer__lang {{ session()->get('locale') == 'en' ? 'selected' : '' }}">
                        <input type="submit" id="de" name="lang" value="de"
                            class="footer__lang {{ session()->get('locale') == 'de' ? 'selected' : '' }}">
                    </form>
                </div>
            </div>

        </div>
    </div>
</footer>
