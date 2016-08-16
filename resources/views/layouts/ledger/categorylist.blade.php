<template id="category-template">

  <section class="content-header">
      <h1>
          Categories
      </h1>
      <ol class="breadcrumb">
          <li><a href="#" v-link="{ path: '/' }"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Categories</li>
      </ol>
  </section>         

  <!-- Main content -->
  <section class="content"> 
    
    <div class="box box-solid box-default">
      
      <div class="box-body">

          <div class="row" v-if="!categories.length">
            <div class="col-md-12">
                <h3 class="text-orange">No Category</h3>
            </div>
          </div>

          <table class="table table-striped" v-if="categories.length">
            <thead>
              <tr>  
                <th>Name</th>
                <th>Description</th>
                <th>Count</th>                    
              </tr>
            </thead>
            <tbody>
              <tr v-for="categoryUnit in categories">                    
                <td>@{{categoryUnit.name}}</td>
                <td>@{{categoryUnit.description}}</td>
                <td>@{{categoryUnit.count}}</td>
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

    @include('layouts.ledger.partials.categoryForm')
    @include('layouts.archive-delete')

</section><!-- /.content -->
</template>