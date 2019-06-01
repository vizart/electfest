<div id="overlay">

    <?php if (!isset($user) || empty($user)) { ?>
        <div id="login-form" class="form-wrapper slide-rotate-hor-top">
            <form class="pure-form pure-form-aligned">
                <fieldset>
                    <legend>⚠️ Please sign in, in order to purchase a ticket!</legend>
                    <div class="pure-group">
                        <input id="email" type="email" placeholder="Email Address">
                        <input id="password" type="password" placeholder="Password">
                    </div>
                    <div class="pure-controls">
                        <button type="submit" class="pure-button pure-button-primary">Sign In</button>
                    </div>
                </fieldset>
            </form>
        </div>
    <?php } ?>

    <?php if (isset($user)) { ?>
        <div id="ticket-form" class="form-wrapper slide-rotate-hor-top">
            <form class="pure-form pure-form-aligned">
                <fieldset>
                    <legend>🎟 Please fill in your details below, to purchase a ticket.</legend>
                    <div class="pure-control-group">
                        <div class="form-names">
                            <input id="first-name" type="text" placeholder="First Name">
                            <input id="last-name" type="text" placeholder="Last Name">
                        </div>
                        <input id="iban" type="text" placeholder="IBAN">
                    </div>
                    <div class="pure-controls">
                        <button type="submit" class="pure-button pure-button-primary">Buy Ticket</button>
                    </div>
                </fieldset>
            </form>
        </div>
    <?php } ?>
</div>