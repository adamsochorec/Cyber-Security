var images=[{url:"https://source.unsplash.com/gKXKBY-C-Dk/1920x1080",thumb:"https://source.unsplash.com/gKXKBY-C-Dk/400x400",original:"https://source.unsplash.com/gKXKBY-C-Dk"},{url:"https://source.unsplash.com/9UUoGaaHtNE/1920x1080",thumb:"https://source.unsplash.com/9UUoGaaHtNE/400x400",original:"https://source.unsplash.com/9UUoGaaHtNE"},{url:"https://source.unsplash.com/w2DsS-ZAP4U/1920x1080",thumb:"https://source.unsplash.com/w2DsS-ZAP4U/400x400",original:"https://source.unsplash.com/w2DsS-ZAP4U"},{url:"https://source.unsplash.com/cWOzOnSoh6Q/1920x1080",thumb:"https://source.unsplash.com/cWOzOnSoh6Q/400x400",original:"https://source.unsplash.com/cWOzOnSoh6Q"},{url:"https://source.unsplash.com/NodtnCsLdTE/1920x1080",thumb:"https://source.unsplash.com/NodtnCsLdTE/400x400",original:"https://source.unsplash.com/NodtnCsLdTE"},{url:"https://source.unsplash.com/eMzblc6JmXM/1920x1080",thumb:"https://source.unsplash.com/eMzblc6JmXM/400x400",original:"https://source.unsplash.com/eMzblc6JmXM"},{url:"https://source.unsplash.com/so5nsYDOdxw/1920x1080",thumb:"https://source.unsplash.com/so5nsYDOdxw/400x400",original:"https://source.unsplash.com/so5nsYDOdxw"},{url:"https://source.unsplash.com/GtwiBmtJvaU/1920x1080",thumb:"https://source.unsplash.com/GtwiBmtJvaU/400x400",original:"https://source.unsplash.com/GtwiBmtJvaU"},{url:"https://source.unsplash.com/YCPkW_r_6uA/1920x1080",thumb:"https://source.unsplash.com/YCPkW_r_6uA/400x400",original:"https://source.unsplash.com/YCPkW_r_6uA"},{url:"https://source.unsplash.com/IbPxGLgJiMI/1920x1080",thumb:"https://source.unsplash.com/IbPxGLgJiMI/400x400",original:"https://source.unsplash.com/IbPxGLgJiMI"},{url:"https://source.unsplash.com/Hd7vwFzZpH0/1920x1080",thumb:"https://source.unsplash.com/Hd7vwFzZpH0/400x400",original:"https://source.unsplash.com/Hd7vwFzZpH0"},{url:"https://source.unsplash.com/0F7GRXNOG7g/1920x1080",thumb:"https://source.unsplash.com/0F7GRXNOG7g/400x400",original:"https://source.unsplash.com/0F7GRXNOG7g"}];window.ProductGallery=function(t){return{isFullScreen:!1,showArrows:!1,count:images.length,activeImage:0,$imageEl:t.querySelectorAll("ul")[0],$thumbNavEl:t.querySelectorAll("ul")[1]||null,$zoomEl:t.querySelector("*[data-zoom]"),$lensEl:t.querySelector("*[data-lens]"),zoomIsActive:!1,zoomRatio:{width:1,height:1},zoomSize:null,lensSize:null,previewSize:null,fullSizeZoomDisabled:!0,fullSizeZoomIsActive:!1,$fullSizeZoomEl:null,fullSizeZoomSize:null,nextImage:function(){this.activeImage=this.activeImage+1<this.count?this.activeImage+1:0},prevImage:function(){this.activeImage=this.activeImage>0?this.activeImage-1:this.count-1},mousewheelEvent:function(t){t.deltaY>0?(this.nextImage(),t.preventDefault()):t.deltaY<0&&(this.prevImage(),t.preventDefault())},scroll:function(){this.scrollToImage(),this.scrollToThumb()},scrollToThumb:function(){if(!this.$thumbNavEl)return;const t=this.$thumbNavEl.querySelector("ul li:nth-child(0n+"+(this.activeImage+1)+")");t&&(this.$thumbNavEl.offsetTop=t.offsetTop+this.$thumbNavEl.clientHeight/2-t.clientHeight/2,this.$thumbNavEl.scrollLeft=t.offsetLeft-this.$thumbNavEl.clientWidth/2+t.clientWidth/2)},scrollToImage:function(){const t=this.$imageEl.children[this.activeImage+1];this.$imageEl.scrollLeft=t.offsetLeft,this.isFullScreen&&this.showFullScreenImage()},toggleFullScreen:function(){this.isFullScreen?this.closeFullScreen():this.openFullScreen();let t=this;setTimeout((function(){t.scroll()}),100)},openFullScreen:function(){document.body.style.overflowY="hidden",document.body.style.height="100vh",this.isFullScreen=!0,setTimeout(this.showFullScreenImage.bind(this),200)},closeFullScreen:function(){document.body.style.overflowY=null,document.body.style.height=null,this.isFullScreen=!1,this.$fullSizeZoomEl.remove(),this.zoomOut,setTimeout(this.zoomOut.bind(this),100)},showFullScreenImage:async function(){this.$fullSizeZoomEl&&this.$fullSizeZoomEl.remove(),this.$fullSizeZoomEl=document.createElement("span"),this.$fullSizeZoomEl.classList.add("absolute","top-0","left-0","inline-block","w-full","h-full","bg-white","bg-contain","bg-center","bg-no-repeat","cursor-zoom-in","transition-all","duration-300","ease-out"),this.$imageEl.querySelectorAll("li span")[this.activeImage].append(this.$fullSizeZoomEl),this.fullSizeZoomSize=this.$fullSizeZoomEl.getBoundingClientRect(),this.fullSizeImageSize=await this.getImageMeta(images[this.activeImage].original),this.$fullSizeZoomEl.style.backgroundImage="url('"+images[this.activeImage].original+"')",(this.fullSizeImageSize.width>this.fullSizeZoomSize.width||this.fullSizeImageSize.height>this.fullSizeZoomSize.height)&&(this.fullSizeZoomDisabled=!1)},updateFullScreenZoom:function(t){let e=t.layerX-t.target.offsetLeft,i=t.layerY-t.target.offsetTop;e=-1*(this.fullSizeImageSize.width-this.fullSizeZoomSize.width)/(this.fullSizeZoomSize.width/e),i=-1*(this.fullSizeImageSize.height-this.fullSizeZoomSize.height)/(this.fullSizeZoomSize.height/i),this.$fullSizeZoomEl.style.backgroundPosition=e+"px "+i+"px"},resetFullScreenZoom:function(){this.$fullSizeZoomEl.classList.add("bg-contain","cursor-zoom-in"),this.$fullSizeZoomEl.classList.remove("bg-auto","cursor-zoom-out"),this.$fullSizeZoomEl.style.backgroundPosition="center"},setFullScreenZoom:function(){this.$fullSizeZoomEl.classList.remove("bg-contain","cursor-zoom-in"),this.$fullSizeZoomEl.classList.add("bg-auto","cursor-zoom-out")},showZoom:function(){this.zoomIsActive=!0},hideZoom:function(){this.zoomIsActive=!1},zoomOut:function(){this.isFullScreen?this.fullSizeZoomIsActive&&this.resetFullScreenZoom():this.hideZoom()},zoomIn:async function(){this.isFullScreen?this.fullSizeZoomIsActive&&this.setFullScreenZoom():(this.showZoom(),this.$zoomEl.style.backgroundImage=null,this.origImgSize=await this.getImageMeta(images[this.activeImage].original),this.previewSize=this.$imageEl.getBoundingClientRect(),this.zoomSize=this.$zoomEl.getBoundingClientRect(),this.hideZoom(),this.$zoomEl.style.backgroundImage="url('"+images[this.activeImage].original+"')",this.zoomRatio.width=this.origImgSize.width/this.previewSize.width,this.zoomRatio.height=this.origImgSize.height/this.previewSize.height,this.lensSize={width:this.zoomSize.width/this.zoomRatio.width+4,height:this.zoomSize.height/this.zoomRatio.height+4},this.$lensEl.style.width=this.lensSize.width+"px",this.$lensEl.style.height=this.lensSize.height+"px",this.showZoom())},zoomMove:function(t){if(t.stopPropagation(),this.isFullScreen)return void(!this.fullSizeZoomDisabled&&this.fullSizeZoomIsActive&&this.updateFullScreenZoom(t));if(!this.lensSize)return;let e=t.layerX-t.target.offsetLeft-this.lensSize.width/2,i=t.layerY-t.target.offsetTop-this.lensSize.height/2;e=e>0?e:0,i=i>0?i:0,e=e+this.lensSize.width>this.previewSize.width?this.previewSize.width-this.lensSize.width:e,i=i+this.lensSize.height>this.previewSize.height?this.previewSize.height-this.lensSize.height:i,this.$lensEl.style.webkitTransform="translateX("+e+"px) translateY("+i+"px)",this.$zoomEl.style.backgroundPosition=e*-this.zoomRatio.width+"px "+i*-this.zoomRatio.height+"px"},toggleFullSizeZoom:function(t){this.fullSizeZoomIsActive?this.closeFullSizeZoom(t):this.showFullSizeZoom(t)},closeFullSizeZoom:function(t){this.fullSizeZoomIsActive=!1,this.resetFullScreenZoom()},showFullSizeZoom:function(t){this.fullSizeZoomIsActive=!0,this.setFullScreenZoom()},getImageMeta:t=>new Promise(((e,i)=>{const s=new Image;s.onload=()=>e(s),s.onerror=t=>i(t),s.src=t}))}};