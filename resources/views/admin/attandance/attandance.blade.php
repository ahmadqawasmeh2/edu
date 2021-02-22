@extends('admin/layouts.master')
@section('title', 'Attandance - Admin')
@section('body')

<section class="content">
  @include('admin.message')
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">

          <h3 class="box-title">User ({{ $user->fname }} {{ $user->lname }} )-> Enrolled on {{ date('d-m-Y', strtotime($enrolled['created_at'])) }}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped table-responsive">

            <thead>
             <h4 class="box-title">User Attandance</h4>
              <tr>
                <th>#</th>
                <th>{{ __('adminstaticword.Users') }}</th>
                <th>{{ __('Attandance Date') }}</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0;?>
              @foreach($attandance as $attand)
              <?php $i++;?>
              <tr>
                <td><?php echo $i;?></td>
              
                <td>
                  <p><b>{{ __('adminstaticword.User') }}:</b> {{ $user->fname }} {{ $user->lname }}</p>
                  
                 
                </td>
                <td>
                	<p><b>{{ __('adminstaticword.Attandance') }}: </b>{{ date('d-m-Y', strtotime($attand->date)) }} </p>
                </td>
                

                @endforeach
             
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>

@endsection
