<a href="#" onclick="window.history.go(-1); return false;" class="govuk-back-link  lbh-back-link">Back</a>

<h1 class="lbh-heading-h1">Callback list</h1>
<br />
<h3 class="lbh-heading-h3">Filter by Help Type:</h3>
<br />
<div class="govuk-grid-row">
    <div class="govuk-grid-column-one-third">
        <select onchange="document.location = '/listcall?calltype=' + this.value" class="govuk-select">
            <option value="">Calltype</option>
            <?php
                foreach(HereToHelp\Helper::$support_type as $type=>$row):
                    ?>
                        <option value="<?=$type?>"<?=$type==$_REQUEST['calltype']?" selected='selected'":""?>><?=$row?></option>
                    <?php
                endforeach;
            ?>
        </select>
    </div>
    <div class="govuk-grid-column-one-third">
        <select onchange="document.location = '/listcall?initials=' + this.value" class="govuk-select">
            <option value="">Assigned to</option>
            <?php
                foreach(HereToHelp\Helper::$fake_users as $row=>$name):
                    ?>
                        <option value="<?=$row?>"<?=$row==$_REQUEST['initials']?" selected='selected'":""?>><?=$name?></option>
                    <?php
                endforeach;
            ?>
        </select>
    </div>
</div>

<br />

<p class="lbh-body-m">Displaying 2 record(s)</p>

<span hidden="true"></span>
<table class="govuk-table  lbh-table">
    <thead class="govuk-table__head">
        <tr class="govuk-table__row">
            <th scope="col" class="govuk-table__header">Name</th>
            <th scope="col" class="govuk-table__header">Address</th>
            <th scope="col" class="govuk-table__header">Requested Date</th>
            <th scope="col" class="govuk-table__header">Type</th>
            <th scope="col" class="govuk-table__header">Unsuccessful call attempts</th>
            <th scope="col" class="govuk-table__header">Follow-up required</th>
            <th scope="col" class="govuk-table__header">Assigned to</th>
            <th scope="col" class="govuk-table__header">Rescheduled at</th>
            <th scope="col" class="govuk-table__header"></th>
        </tr>
    </thead>
    <tbody class="govuk-table__body">
        <?php
            foreach(range(1, 50) as $i):
                $initial = array_rand(HereToHelp\Helper::$fake_users);
                $support_type = array_rand(HereToHelp\Helper::$support_type);

                if($_REQUEST['initials']&&$_REQUEST['initials']!=$initial) continue;
                if($_REQUEST['calltype']&&$_REQUEST['calltype']!=$support_type) continue;

                $first_names = array("Abbot", "Mary", "John", "Nicolas", "Ben");
                $last_names = array("Taliavare", "Johnson", "Stradivarius");

                ?>
                    <tr class="govuk-table__row">
                        <td class="govuk-table__cell">
                            <?=$first_names[array_rand($first_names)]?> <?=$last_names[array_rand($last_names)]?>
                        </td>
                        <td class="govuk-table__cell">
                            Flat <?=rand(1, 50)?>, Caliban
                        </td>
                        <td class="govuk-table__cell"><?=date("Y-m-d", time()-(rand(1, 100)*60*60*24))?></td>
                        <td class="govuk-table__cell"><span title="<?=HereToHelp\Helper::$support_type[$support_type]?>"><?=$support_type?></span></td>
                        <td class="govuk-table__cell "><?=rand(0, 20)?></td>
                        <td class="govuk-table__cell"><?=rand(0, 1)?"Y":"N"?></td>
                        <td class="govuk-table__cell"><a href="/singleassign" title="<?=HereToHelp\Helper::$fake_users[$initial]?>"><?=$initial?>✎</a></td>
                        <td class="govuk-table__cell"><?=!rand(0, 10)?date("Y-m-d H:i", time()+(rand(0, 60*60*24))):""?></td>
                        <td class="govuk-table__cell">
                            <a data-testid="view-button" href="/oneresident?id=18" class="js-cta-btn" id="view-resident-18">View</a>
                        </td>
                    </tr>
                <?php
            endforeach;
        ?>
    </tbody>
</table>