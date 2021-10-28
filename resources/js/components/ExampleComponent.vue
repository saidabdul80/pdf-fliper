<template>
    <div style="padding:20px; ">        
        <center>
            <b style="font-size:2em;">Accessible through <i class="fa fa-hand-o-right"></i> <span style="color:red;"> www.bit.ly/caisnrf </span></b>
    <Flipbook ref="flipbook" :dragToFlip="true"  loadingImage="/loader.gif" class="flipbook" :pages="pages">
    </Flipbook>
    <div class="d-flex flex-wrap mt-2">
    <Flipbook v-slot="flipbook" :pages="pages" >

        <button v-if="start"  class="btn btn-primary" disabled="disabled" ><i class="fa fa-chevron-left text-white"></i></button>
        <button  v-else class="btn btn-primary"  @click="leftX()" ref="backx1"><i class="fa fa-chevron-left text-white"></i></button>
        <a href="/english.pdf" target="_blank" class="btn btn-primary text-white " >Download</a>    
        <button v-if="end" disabled="disabled" class="btn btn-primary" ><i class="fa fa-chevron-right text-white"></i></button>
        <button v-else class="btn btn-primary"  @click="rightX()" ref="rightx1"><i class="fa fa-chevron-right text-white"></i></button>
    </Flipbook>

    </div>
    <i class="leftxx"></i>
    <i class="rightxx"></i>
    
        </center>
    </div>
</template>
<script>
import Flipbook from '../../../node_modules/flipbook-vue' 
export default {     
  components: { Flipbook },    
    data(){
        return{
            pages:[
            '/files/n/a1.jpg',
            '/files/n/a2.jpg',
            '/files/n/a3.jpg',
            '/files/n/a4.jpg',
            '/files/n/a5.jpg',
            '/files/n/a6.jpg',
            '/files/n/a7.jpg',
            '/files/n/a8.jpg',
            '/files/n/a9.jpg',
            '/files/n/a10.jpg',
            '/files/n/a11.jpg',
            '/files/n/a12.jpg',
            '/files/n/a13.jpg',
            '/files/n/a14.jpg',
            '/files/n/a15.jpg']
            ,            
            end:false,
            start:true
        }
    },
    methods:{
        rightX(){
              this.$refs.flipbook.flipStart('right', true);
        },
        leftX(){
              this.$refs.flipbook.flipStart('left', true);
        }

    },
mounted(){
  this.$nextTick(()=>{
      let self = this;
      //    console.log(self.$refs.flipbook);
      let egg = setInterval(() => {
          if(self.$refs.flipbook.currentPage <14 ){            
              self.end = false
          }else{
              self.end = true
          }
          if(self.$refs.flipbook.currentPage > 0){              
              self.start = false
          }else{
              self.start = true
          }         
      }, 10);
      let back, right;
      setInterval(() => {
          back = self.$refs.backx1;
          right = self.$refs.rightx1;
           if(self.$refs.flipbook.currentPage <14 && self.$refs.flipbook.currentPage >-1 ){ 
               right.click();
           }else{
               self.$refs.flipbook.currentPage = 0;
           }            
      }, 10000);
  });
}
}
</script>
<style>
@media screen and (max-width:500px){
    main div{
        padding: 0px !important;
    }


}
.flipbook {
  width: 85vw;
  height: 85vh;
}
.flipbook-container{
    margin: 5px auto !important;
}
.click-to-flip{
    background: #fff;
}
.leftxx{
    font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f053";
        text-align: left;
    position: relative;
    left: -45%;
    color:rgb(253, 219, 66);
    pointer-events: none !important;
    cursor: pointer;
    font-size: 5rem;
    top: 40%;

}
.rightxx{
    font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f054";
        text-align: left;
    position: relative;
    right: -45%;
    color:rgb(253, 219, 66);
    pointer-events: none !important;
    cursor: pointer;
    font-size: 5rem;
    top: 40%;
}
.flex-wrap{
    justify-content: center;
    flex-wrap: wrap;
    align-items: center;
}
</style>
 