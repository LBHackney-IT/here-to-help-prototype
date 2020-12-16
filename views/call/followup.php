<a href="#" onclick="window.history.go(-1); return false;" class="govuk-back-link  lbh-back-link">Back</a>

<?php
    if($_REQUEST['new']=="true"):
        ?>
            <h2>Add a follow-up</h2>

            <fieldset class="govuk-fieldset">
                <h3>Case notes</h3>
                <textarea class="govuk-textarea  lbh-textarea" id="NewCaseNote" name="NewCaseNote" rows="2" aria-describedby="NewCaseNote-hint" spellcheck="false"></textarea>
            </fieldset>
        <?php
    else:
        ?>
            <h2>Add a follow-up</h2>

            <p>Help required: Contact Tracing</p>

            <p>
                Initial date requested: 10/12/2020<br />
                Callback required: Y<br />
                Unsuccessful call attempts: 3<br />
                No answer machine
            </p>

            <fieldset class="govuk-fieldset">
                <legend class="govuk-fieldset__legend">What would the resident like to do?</legend>

                <div class="govuk-radios govuk-radios--inline lbh-radios">
                    <div class="govuk-radios__item">
                        <input class="govuk-radios__input" id="HelpNeeded" name="HelpNeeded" type="radio" value="Contact Tracing">
                        <label class="govuk-label govuk-radios__label" for="HelpNeeded">
                            Start conversation
                        </label>
                    </div>

                    <div class="govuk-radios__item">
                        <input class="govuk-radios__input" id="HelpNeeded-2" name="HelpNeeded" type="radio" value="Shielding">
                        <label class="govuk-label govuk-radios__label" for="HelpNeeded-2">
                            Reschedule call
                        </label>
                    </div>

                    <div class="govuk-radios__item">
                        <input class="govuk-radios__input" id="HelpNeeded-3" name="HelpNeeded" type="radio" value="Help Request">
                        <label class="govuk-label govuk-radios__label" for="HelpNeeded-3">
                            Unwilling to engage
                        </label>
                    </div>
                </div>
            </fieldset>
        <?php
    endif;
?>

<button id="update-btn" class="govuk-button lbh-button js-cta-btn" data-module="govuk-button">
    Continue
</button>