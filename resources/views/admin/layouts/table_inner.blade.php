 @foreach($fields as $key => $value)
 
   <?php 
   $enable_is = @ isset($value['enable']) && isset($settings[$key]['enable']) || ($key == "header" || $key == "enable")  ? "enabled_option":"disabled_option";  
   $enable_is = @count($settings) >0? $enable_is :"";
   ?>                       
  <tr style="padding: 5px 0;" class="options_each {{@$enable_is}}"  id="edit_{{@$key}}" >
    
    @foreach($value as $k=>$field) 
      <td style="vertical-align: middle;">  
      @if(!empty($field))
         <?php $option = explode('|',$field);?>
         
          @if($option[1]=='checkbox')
           
           {!! @$option[0] == 'enable' ? '' : "<label>".@$option[0]."</label><br />" !!}
            <label class="switch">
              <input type="checkbox" class="checkbox" name="{{$key}}[{{$k}}]"  {{@$settings[$key][$k] == $option[2]?' checked=""':''}} value="{{$option[2]}}"  />
              <span class="slider round"></span>
           </label>
           
           @elseif($option[1]=='select')
              <div class="edit_text">{!! $option[0] .": <b>". @ucfirst($settings[$key][$k])."</b>" !!}</div>
              
              <label class="hide_edit">{{$option[0]}} <br />
                <?php $type= @explode(":",$option[2]);?> 
                <select name="{{$key}}[{{$k}}]" class="form-control">
                  @foreach(@$type as $t) 
                     <option value="{{$t}}" {{@$settings[$key][$k] == $t ? 'selected=""':''}}>{{@ucfirst($t)}}</option>
                   @endforeach
               </select>
               </label>
            @elseif($option[1]=='textarea') 
            <div class="edit_text">{!! isset($settings[$key])? @str_replace("\n","<br />",$settings[$key][$k]) : @$option[2] !!}</div>
              <label class="hide_edit"> 
                   {{$option[0]}}<br />
               <textarea name="{{$key}}[{{$k}}]" class="form-control">{!! isset($settings[$key])? @$settings[$key][$k] : @$option[2] !!}</textarea>  
              </label>
            @elseif($option[1]=='none')
               {!! @$option[0]  !!}
           @else
             
              <?php 
                $value =  isset($settings[$key])? @$settings[$key][$k] : @$option[2] ;
                $value =  !isset($settings[$key]) && @$option[2]=="is"?  @$option[0] : $value ;
               ?>
               
           <div class="edit_text">{{@$value}}</div>
           <label class="hide_edit">
                   {!! $option[0] !!} <br />
               <input type="text" class="form-control" name="{{$key}}[{{$k}}]" value="{{@$value}}"  />
           </label>
           @endif 
      @endif 
    </td>
    
     @endforeach 
     <td> 
       <a href="#" class="fa_edit"  onclick="edit_row_tr('#edit_{{@$key}}');return false;"> </a>
    </td>
     
 </tr>
@endforeach     