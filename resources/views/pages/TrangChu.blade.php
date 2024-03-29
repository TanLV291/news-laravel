@extends('layout.master')
@section('noidung')
<base href="{{asset('')}}">
<div class="container">
   <div class="row" style="margin-top: 10px;">
      <!-- phần left -->
      <div class="col-sm-8" style="margin-bottom: 5px;">
         <div class="row">
            <div class="col-sm-12">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <?php $i=0; ?>
                     @foreach($tt as $slie)	
                     <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" 
                     @if($i==0) class="active"
                     @endif ></li>
                     <?php  $i++; ?>
                     @endforeach
                  </ol>
                  <div class="carousel-inner" id="mouse" >
                     <?php $i=0; ?>	
                     @foreach($tt as $slie)
                     <div  @if($i==0) class="carousel-item active"
                     @else class="carousel-item" 
                     @endif >
                     <a href="chitiettin/{{$slie->id}}">
                        <img class="rounded img-fluid" src="img/{{$slie->Hinh}}" alt="First slide" style="width: 100%;">
                        <div class="carousel-caption">
                         <p>{{$slie->TieuDe}}</p>
                       </div>
                     </a>
                  </div>
                  <?php  $i++; ?>
                  @endforeach
               </div>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <!--  tin hàng ngang -->
      <div class="row" style="margin-top:10px; border-bottom: 1px solid #e2e1d9;" >
         @foreach($tinthuong as $th)
         <div class="col-12 col-sm-4" >
            <div class="row">
               <div class="col-sm-12">
                  <a href="chitiettin/{{$th->id}}">
                     <div class="row">
                        <div class="col-sm-12" id="mouse">
                           <img class="rounded img-fluid" src="img/{{$th->Hinh}}"
                              style="width: 100% ; height:120px;">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <b>{{$th->TieuDe}}</b><br>
                           <small style="color:silver"><?php 
                              $dt= $th->created_at;
                              echo $dt->diffForHumans($tg); ?>
                           </small>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <!-- kết thúc -->
      <!-- tin hàng dọc -->
      @foreach($tinthuong1 as $tt)
      <a href="chitiettin/{{$tt->id}}">
         <div class="row"
            style="border-bottom: 1px solid #e2e1d9;  margin-bottom: 10px;" >
            <div class="col-sm-4 col-12" style="margin:15px 0px;" id="mouse">
               <img class="rounded mx-auto d-block" src="img/{{$tt->Hinh}}" alt="img" 
                  style="width: 100%" height="120"/>  
            </div>
            <div class="col-sm-8 col-12" style="margin:15px 0px;">
               <h5>{{$tt->TieuDe}}</h5>
               <p style="color:gray">{{$tt->TomTat}}</p>
               <small style="color:silver"><?php 
                  $dt= $tt->created_at;
                  echo $dt->diffForHumans($tg); ?>
               </small>
            </div>
         </div>
      </a>
      @endforeach
   </div>
   <!-- kêt thúc phần left -->
   <!--   phần right -->
   <div class="col-sm-4 col-12 ">
      @foreach($tinnoibat as $nb)
      <a href="chitiettin/{{$nb->id}}">
         <div class="row" style="margin-bottom: 20px;">
            <div class="col-sm-3 col-5" id="mouse">  
               <img src="img/{{$nb->Hinh}}"  class="rounded mx-auto d-block" alt="Paris" style="width: 100%">  
            </div>
            <div class="col-sm-9 col-7">
               <h6>{{$nb->TieuDe}}</h6>
               <small style="color:silver"><?php 
                  $dt= $nb->created_at;
                  echo $th = $dt->diffForHumans($tg); ?>
               </small>
            </div>
         </div>
      </a>
      @endforeach
      <div class="row QC" style="margin-bottom: 50px;">
         <div class="col-sm-12 qc1">
            <div id="close">
               <button type="button" class="close" style="outline: none;">×</button>
               <img src="img/quangcao2.jpg" class="rounded img-fluid" style="width: 100%">
            </div>
         </div>
         <div class="col-sm-12 qc1">
            <div id="close">
               <button type="button" class="close" style="outline: none;">×</button>
               <img src="img/quangcao3.jpg" class="rounded img-fluid" style="width: 100%">
            </div>
         </div>
      </div>
      <!-- kêt thúc phần right -->
   </div>
</div>
</div>
<style type="text/css">
   .close{
   position: relative;top:25px;
   right:5px;
   color: white;
   }
</style>
<script type="text/javascript">
   //  	  $(document).ready(function(){
   //   $(".close").click(function(){
   //     $("#myAlert").alert("close");
   //   });
   // });
   
   $(document).ready(function(){
   	$(".QC .qc1").click(function(){
   		$(this).find("#close").hide();
   	})
   });
    
</script>
@endsection