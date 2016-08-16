<template id="ledger-form-template">

    <div class="modal-header bg-success" v-bind:class="{ 'bg-info': ledger.id }">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">×</span></button>
        <h4 class="modal-title">
            <span v-if="ledger.id">Edit</span>
            <span v-if="!ledger.id">New</span> Ledger
        </h4>
    </div>
    
    <div class="modal-body">
        <form class="form-horizontal row-paddings-compensation">
            <input v-if="ledger.id !=0" name="_method" v-model="ledger._method" type="hidden" value="PUT">
            <div class="row">
                <div class="form-group col-xs-7 col-sm-6">
                    <label class="col-sm-4 control-label">Date</label>
                    <div class="col-sm-8">
                        <div class="input-group date" v-datepicker="ledger.date" id="datepick">
                            <input type="text" class="form-control">
                            <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th"></i></span>
                        </div>
                    </div>
                </div>

                <div class="form-group col-sm-6 col-xs-7" v-bind:class="{ 'has-error': errors.name }">
                    <label class="col-sm-4 control-label">Name</label>
                    <div class="col-sm-8">
                        <input placeholder="Enter ..." class="form-control" type="text">
                        <small class="error" v-if="errors.name">@{{ errors.name[0] }}</small>                        
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="form-group col-sm-6 col-xs-7">
                    <label class="col-sm-4 control-label">Category</label>
                    <div class="col-sm-8">
                        <select class="form-control">
                            <option value="0">Breeder</option>
                            <option value="12">                                Blanca: 10                            </option><option value="13">                                NewB: 09                            </option><option value="14">                                Dozy: 12                            </option><option value="15">                                Flecks: 14                            </option><option value="17">                                Snow: 15                            </option><option value="18">                                Loopy: 11                            </option>
                            <option value="-1">Other ...</option>
                        </select>
                        
                    </div>
                </div>

                <div class="form-group col-sm-6 col-xs-7">
                    
                    
                </div>
                
            </div>

            

            <div class="row">
                <div class="form-group col-sm-6 col-xs-7">
                    <label class="col-xs-4 control-label">Type</label>
                    <div class="col-xs-8">
                        <div class="icheck-group">
                            <div aria-disabled="false" aria-checked="false" style="position: relative;" class="iradio_square-red checked"><input style="position: absolute; opacity: 0;" class="js_icheck-breeder-red" name="sex" value="doe" id="breeder-sex-doe" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            <label for="breeder-sex-doe" class="icheck-label"> Debit</label> <br>
                            <div aria-disabled="false" aria-checked="false" style="position: relative;" class="iradio_square-green"><input style="position: absolute; opacity: 0;" class="js_icheck-breeder-green" name="sex" value="buck" id="breeder-sex-buck" type="radio"><ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div>
                            <label for="breeder-sex-buck" class="icheck-label"> Credit</label>
                        </div>
                    </div>
                </div><div class="form-group col-sm-6 col-xs-7">
                    <label class="col-sm-4 control-label">Amount</label>
                    <div class="col-sm-8">
                        <input placeholder="Enter ..." class="form-control" min="0" step=".1" type="number">
                    </div>
                </div>
                
            </div>

            

            

            <div class="row">
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label">Notes</label>
                    <div class="col-sm-10">
                            <textarea placeholder="Descriptions" rows="3" class="form-control"></textarea>
                    </div>
                </div>
            </div>

        </form>

    </div>
    <div class="modal-footer bg-success" v-bind:class="{ 'bg-info': breeder.id }">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" @click="sendBreeder" class="btn btn-success" v-bind:class="{ 'btn-info': breeder.id }">Save changes</button>
    </div>
</template>
