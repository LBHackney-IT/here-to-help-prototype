<a href="#" onclick="window.history.go(-1); return false;" class="govuk-back-link lbh-back-link" style="margin-top: -40px; display: block; border-bottom: none;">Back</a>
<div class="govuk-grid-row">
    <div class="govuk-grid-column-one-quarter-from-desktop sticky-magic">
        <?=HereToHelp\Helper::render("resident", "micro", false, false)?>
    </div>

    <div class="govuk-grid-column-full">


        <h1 style="margin-top: 0px; margin-bottom: 40px;">Name Surname</h1>

        <?=HereToHelp\Helper::render(next($folder), next($file), $content, $id)?>

        <br />

        <hr />

        <br />

        <h2>Case notes</h2>

        <br />

        <select class="govuk-select" onchange="
            let filters = document.getElementsByClassName('filter');
            for(let i=0; i<filters.length; i++) {
                if(filters[i].getAttribute('data-type')==this.value||!this.value) {
                    filters[i].style.display = 'block';
                }
                else {
                    filters[i].style.display = 'none';
                }
            }
        ">
            <option value="">Filter by support type</option>
            <option>Help Request</option>
            <option>CEV</option>
            <option>Welfare</option>
            <option>Shielding</option>
        </select>

        <div style="background-color: rgba(220, 233, 213, 1); padding: 20px; margin-top: 20px;" class="filter" data-type="Help Request">
            <h4>8/12/2020 by Annalivia Ryan</h4>
            <p>
                Successful Help Request call<br />
                Referrals: Food parcel, Shoreditch Trust<br />
                Referral notes: Resident requested hot food, halal, gluten-free. Need to knock on the door as doorbell broken.<br />
                Follow-up requested: Y<br />
                Follow-up notes: Chase food parcel referral from Shoreditch Trust.
            </p>
        </div>
        <div style="background-color: rgba(220, 233, 213, 1); padding: 20px; margin-top: 20px;" class="filter" data-type="Shielding">
            <h4>1/12/2020 by Annalivia Ryan</h4>
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