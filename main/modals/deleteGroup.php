<!-- group modal -->
<div class="modal fade deleteGroup-modal" id="deleteGroupModal" tabindex="-1" role="dialog" aria-labelledby="deleteGroupModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 300px;" role="document">
        <div class="modal-content">

            <div class="modal-header" id="deleteGroupModalLabel">
                <h4 class="modal-title">Удалить группу</h4>
                <button type="button" class="close deleteGroup" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
      
     
            <div class="modal-body">
                <form class="mt-0" action="" method="POST">
                    <div class="form-group">
                        <div class="deleteGroupForm" style="max-width: 250px; max-height:300px; overflow:auto;">
                            <?php
                            $handle = @fopen($_SERVER['DOCUMENT_ROOT']."/groups.txt", "r");
                            while($str = fgets($handle))
                                printf('
                                    <label class="new-control new-checkbox sq checkbox-primary" style="width:210px">
                                        <input type="checkbox" class="new-control-input deleteGroupCheckbox" value="'.$str.'">
                                        <span class="new-control-indicator"></span>'.$str.'
                                    </label>
                                    ');
                            ?>
                        </div>
                    </div>
                    <button id="deleteGroup" name="deleteGroup" type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Удалить выбранные группы</button>
                </form>

            </div>
            
            
        </div>
    </div>
</div>