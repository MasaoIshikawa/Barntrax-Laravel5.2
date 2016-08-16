<template id="ledger-template">

  <section class="content-header">
      <h1>
          Ledger
          <small>
              <a v-link="{ path: '/ledger', activeClass: 'bold', exact: true }" href="#">All</a> |
              <a v-link="{ path: '/ledger/credits', activeClass: 'bold' }" href="#">Credits</a> |
              <a v-link="{ path: '/ledger/debits', activeClass: 'bold' }" href="#">Debits</a> |
              <a v-link="{ path: '/ledger/archive', activeClass: 'bold' }" href="#">Archived</a>
          </small>
      </h1>
      <ol class="breadcrumb">
          <li><a href="#" v-link="{ path: '/' }"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Breeders</li>
      </ol>
  </section>         

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>$44</h3>
            <p>Income</p>
          </div>
          <div class="icon">
            <i class="fa fa-dollar"></i>
          </div>
          
        </div>
      </div><div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>$350</h3>
            <p>Cost</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
          
        </div>
      </div><!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>$7</h3>
            <p>Cost per Breeder</p>
          </div>
          <div class="icon">
            <i class="fa fa-venus-mars"></i>
          </div>
          
        </div>
      </div><!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>$2</h3>
            <p>Cost per Kit</p>
          </div>
          <div class="icon">
            <i class="fa fa-th"></i>
          </div>
          
        </div>
      </div><!-- ./col -->
    </div>
    
    
    
    <div class="box box-solid box-default">
      
      <div class="box-body">
          <div class="col-sm-3">
            <div class="form-group" class="col-sm-4">
              <label class="col-sm-4">Date range:</label>

              <div class="input-group" class="col-sm-8">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="reservation">
              </div>
              <!-- /.input group -->
            </div>
          </div>

          <div class="row" v-if="!ledgers.length">
            <div class="col-md-12">
                <h3 class="text-orange">No Ledger</h3>
            </div>
          </div>

          <table class="table table-striped" v-if="ledgers.length">
            <thead>
              <tr>                 
                <th>Date</th>  
                <th>Name</th>
                <th>Category</th>
                <th>Debit/Credit</th>
                <th>Amount</th>                       
              </tr>
            </thead>
            <tbody>
              <tr v-for="ledgerUnit in ledgers">                    
                <td>@{{ledgerUnit.date}}</td>
                <td><strong>@{{ledgerUnit.name}}</strong></td>
                <td>@{{ledgerUnit.category_id}}</td>
                <td>
                  <span class="badge bg-green">                    
                    <i class="fa fa-plus" v-if="ledgerUnit.isDebit"></i>
                    <i class="fa fa-minus" v-if="!ledgerUnit.isDebit"></i>
                  </span>
                </td>
                <td>@{{ledgerUnit.amount}}</td>
                <td></td>
                <td>
                  <div class="btn-group pull-right">
                    <button title="Edit" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                    <button title="Archive" class="btn btn-default  btn-xs"><i class="fa fa-archive"></i></button>                    
                    <button title="Delete" class="btn btn-default btn-xs"><i class="fa fa-trash"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
        
        
        
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <a data-toggle="modal" role="button" href="#" @click.prevent="addNew">
          <div class="info-box">
              <span class="info-box-icon bg-gray text-muted"><i class="fa fa-plus"></i></span>
              <div class="info-box-content text-muted">
                <h1>Add New</h1>
              </div><!-- /.info-box-content -->
          </div><!-- /.info-box -->
        </a>
      </div>
    </div>

    @include('layouts.ledger.partials.ledgerForm')
    @include('layouts.archive-delete')

</section><!-- /.content -->
</template>