<form id="files_etherpad" action="#" method="post">
    <fieldset class="personalblock">
        <strong><?php p($l->t('Collaborative Documents')); ?></strong>
        <p>
            <label for="files_etherpad_host"><?php p($l->t('Etherpad Host')); ?></label>
            <input type="text" id="files_etherpad_host" name="files_etherpad_host"
                value="<?php p($_['files_etherpad_host']); ?>" />
                <em><?php p($l->t('ex:')); ?> http://lite.framapad.org</em>
        </p>
        <p>
            <label for="files_etherpad_calc_host"><?php p($l->t('Ethercalc Host')); ?></label>
            <input type="text" id="files_etherpad_calc_host" name="files_etherpad_calc_host"
                value="<?php p($_['files_etherpad_calc_host']); ?>" />
                <em><?php p($l->t('ex:')); ?> http://framacalc.org</em>
        </p>
        <input type="submit" value="<?php p($l->t('Save')); ?>" />
    </fieldset>
</form>
