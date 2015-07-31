<div class="boxnhandinh" >
    <div  class="tabphantich">
	 <p class="titlenhandinh">Nh&#7853;n &#273;&#7883;nh c&#7911;a c&aacute;c t&#7893; ch&#7913;c </p>         
    </div>
    <div class="frameconentphantich"> 
        <?php 
        if(isset($nhanDinhCuaToChuc)){
            $data['frameContentAnalyze'] = $nhanDinhCuaToChuc;            
            $this->load->view('home/frameContentAnalyze',$data);            
        }
        ?>	 		 
    </div>
</div>