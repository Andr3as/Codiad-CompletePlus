<?php
    require_once('../../common.php');
?>
<div class="complete_settings">
    <label><span class="icon-code big-icon"></span>Drag'n'Drop Settings</label>
    <hr>
    <table class="settings">
        <tr>
            <td>
                Autocomplete on keyup
            </td>
            <td>
                <select class="setting" data-setting="codiad.plugin.completeplus.keyup">
                    <option value="true"><?php i18n("Yes"); ?></option>
                    <option value="false" selected><?php i18n("No"); ?></option>
                </select>
            </td>
        </tr>
    </table>
</div>