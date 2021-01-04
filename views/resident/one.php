<a href="#" onclick="window.history.go(-1); return false;" class="govuk-back-link lbh-back-link" style="margin-top: -40px; display: block; border-bottom: none;">Back</a>
<div class="govuk-grid-row">
    <div class="govuk-grid-column-one-quarter-from-desktop sticky-magic">
        <?=HereToHelp\Helper::render("resident", "micro", false, false)?>
    </div>

    <div class="govuk-grid-column-three-quarters-from-desktop">


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
            <?php
                $types = HereToHelp\Helper::$support_type;
                foreach($types as $key=>$value):
                    ?>
                        <option value="<?=$key?>"<?=$_REQUEST['filter']==$key?" selected='selected'":""?>><?=$value?></option>
                    <?php
                endforeach;
            ?>
        </select>

        <?php
            $names = HereToHelp\Helper::$fake_users;

            foreach(array_fill(0, 10, "Random text") as $case_note):
                $name = $names[array_rand($names)];
                $type_key = array_rand($types);
                $type = $types[$type_key];

                ?>
                    <div style="background-color: rgba(220, 233, 213, 1); padding: 20px; margin-top: 20px;<?=$_REQUEST['filter']&&$_REQUEST['filter']!=$type_key?" display: none; ":""?>" class="filter" data-type="<?=$type_key?>">
                        <h4><?=date("Y-m-d", time()-(rand(1, 100)*60*60*24))?> by <?=$name?></h4>

                        <p>
                            <?=$type?>: <?=$case_note?>
                        </p>
                    </div>
                <?php
            endforeach;
        ?>
    </div>
</div>