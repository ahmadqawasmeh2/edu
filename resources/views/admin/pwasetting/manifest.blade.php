

<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <!-- /.box-header -->
        <div class="box-body">
          <form action="{{ route('manifest.update') }}" method="POST">
            @csrf


              <div class="form-group">
                <label for="">{{ __('adminstaticword.BankEnable') }}: </label>
                <br>
                <li class="tg-list-item">              
                        <input class="tgl tgl-skewed" id="cb3" type="checkbox" name="pwa_enable" {{ $env_files['PWA_ENABLE'] == '1' ? 'checked' : '' }} >
                        <label class="tgl-btn" data-tg-off="Disable" data-tg-on="Enable" for="cb3"></label>
                      </li>
                      <input type="hidden"  name="free" value="0" for="cb3" id="cb3"> 
                
              </div>
              
              <div class="form-group">
                <label>App Name: </label>
                <input disabled class="form-control" type="text" name="app_name" value="{{ config("app.name")}}"/>
              </div>
              <br>
    
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Theme Color for header: </label>
                    <input name="pwa_theme" class="form-control" type="color" value="{{ $env_files['PWA_THEME_COLOR'] }}"/>

                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Background Color:</label>
                    <input name="pwa_bg" class="form-control" type="color" value="{{ $env_files['PWA_BG_COLOR'] }}"/>
                  </div>
                </div>
              </div>
              <br>
              <br>
      
              <div class="box-footer">
                <button type="submit" class="btn btn-md btn-flat btn-primary">
                  <i class="fa fa-save"></i> Save Changes
                </button>
              </div>
         
            
          </form>
        </div>
        <!-- /.box-body -->
     
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>