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
                    <form action="/languages/change" method="POST" id="language">
                        @csrf
                        @method('PUT')
                        <input type="submit" id="ru" name="lang" value="ru"
                            class="footer__lang {{ session('locale') == 'ru' ? 'selected' : '' }}">
                        <input type="submit" id="en" name="lang" value="en"
                            class="footer__lang {{ (session('locale') == 'en' || session('locale') == null) ? 'selected' : '' }}">
                        <input type="submit" id="de" name="lang" value="de"
                            class="footer__lang {{ session('locale') == 'de' ? 'selected' : '' }}">
                    </form>
                </div>
            </div>

        </div>
    </div>
</footer>
