<div class="govuk-grid-row">
    <a href="/<?=$_REQUEST["empty"]=="true"?"listresident":"listcall"?>" class="govuk-back-link lbh-back-link">Back</a>

    <h1 style="margin-top: 0px; margin-bottom: 40px;">Name Surname</h1>

    <div class="govuk-grid-column-one-third">
        <?=HereToHelp\Helper::render("resident", "micro", false, false)?>
    </div>

    <div class="govuk-grid-column-two-thirds">
        <?=HereToHelp\Helper::render(next($folder), next($file), $content, $id)?>

        <hr />

        <div style="border: 2px solid #ccc; padding: 20px;">
            <h2>Case notes</h2>
            <div style="background-color: rgba(220, 233, 213, 1); padding: 20px;">
                <h4>8/12/2020 by Annalivia Ryan</h4>
                <p>
                    Successful Help Request call<br />
                    Referrals: Food parcel, Shoreditch Trust<br />
                    Referral notes: Resident requested hot food, halal, gluten-free. Need to knock on the door as doorbell broken.<br />
                    Follow-up requested: Y<br />
                    Follow-up notes: Chase food parcel referral from Shoreditch Trust.
                </p>
            </div>
        </div>
    </div>
</div>