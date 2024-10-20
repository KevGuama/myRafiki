import{r as i,h as t,g as s}from"./p-43f79dfb.js";const l=":host{display:block;overflow:hidden}presto-player{opacity:0;visibility:hidden;transition:0.35s opacity, 0.35s visibility}presto-player.ready{opacity:1;visibility:visible}",o=l,d=class{constructor(t){i(this,t),this.items=void 0,this.heading=void 0,this.listTextSingular=void 0,this.listTextPlural=void 0,this.transitionDuration=5,this.currentPlaylistItem=void 0,this.currentPlyr=void 0,this.playing=!1}rewatch(){this.handlePlay()}next(){this.handleNext()}handleCurrentPlay(t,i){var l;t&&(this.addOverlay(),this.currentPlyr.elements.container.getRootNode().host.style=this.currentPlaylistItem.config.styles,void 0!==i&&("youtube"===this.currentPlyr.provider&&!this.currentPlyr.muted&&(null===(l=this.currentPlyr)||void 0===l?void 0:l.embed)&&this.currentPlyr.embed.unMute(),this.currentPlyr.play()))}addOverlay(){var t,i;this.overlay=document.createElement("presto-playlist-overlay"),this.overlay.nextItemTitle=this.getNextItemTitle(),this.overlay.isLastItem=this.isLastItem(),this.overlay.nextItemString=(null==this?void 0:this.listTextSingular)||"Video",this.overlay.transitionDuration=this.transitionDuration,null===(i=null===(t=this.currentPlyr.elements)||void 0===t?void 0:t.container)||void 0===i||i.closest(".presto-player__wrapper").append(this.overlay)}componentWillLoad(){var t;this.currentPlaylistItem=(null===(t=null==this?void 0:this.items)||void 0===t?void 0:t[0])||null}handleItemClick(t){this.overlay&&(this.overlay.show=!1),this.el.style.height=this.el.offsetHeight+"px",this.el.style.width=this.el.offsetWidth+"px",this.currentPlaylistItem=t}handleNext(){this.overlay.show=!1,this.currentPlaylistItem=this.getNextItem()||this.currentPlaylistItem}handlePlay(){this.overlay&&(this.overlay.show=!1),this.currentPlyr.play()}handlePause(){this.overlay.show=!1,this.currentPlyr.pause()}getNextItem(){var t,i,l,e;if(this.isLastItem())return this.items[0];let s;for(let r=0;r<(null===(t=this.items)||void 0===t?void 0:t.length);r++)if((null===(i=this.items[r])||void 0===i?void 0:i.id)===(null===(l=this.currentPlaylistItem)||void 0===l?void 0:l.id)&&(null===(e=this.items)||void 0===e?void 0:e.length)!==r+1){s=this.items[r+1];break}return s}isLastItem(){var t,i,l;const e=(null===(t=this.items)||void 0===t?void 0:t.length)-1;return(null===(i=this.items[e])||void 0===i?void 0:i.id)===(null===(l=this.currentPlaylistItem)||void 0===l?void 0:l.id)}getNextItemTitle(){var t;const i=this.getNextItem();return void 0!==i?(null==i?void 0:i.title)||(null===(t=null==i?void 0:i.config)||void 0===t?void 0:t.title):""}render(){var i,l,e,s,r,n,o,a,d;if(!(null===(i=this.items)||void 0===i?void 0:i.length))return"";const h=this.listTextSingular?this.listTextSingular:"Video",u=this.listTextPlural?this.listTextPlural:"Videos";return t("presto-playlist-ui",null,(null===(l=this.currentPlaylistItem.config)||void 0===l?void 0:l.src)?t("presto-player",Object.assign({slot:"preview",src:null===(e=this.currentPlaylistItem.config)||void 0===e?void 0:e.src},this.currentPlaylistItem.config,{video_id:null===(s=this.currentPlaylistItem.config)||void 0===s?void 0:s.id,id:`presto-player-${null===(r=this.currentPlaylistItem.config)||void 0===r?void 0:r.id}`,"media-title":null===(n=this.currentPlaylistItem.config)||void 0===n?void 0:n.title,class:null===(o=this.currentPlaylistItem.config)||void 0===o?void 0:o.playerClass,key:null===(a=this.currentPlaylistItem.config)||void 0===a?void 0:a.id,provider:null===(d=this.currentPlaylistItem.config)||void 0===d?void 0:d.provider,onPlayerReady:t=>{this.currentPlyr=t.detail,this.el.style.height=null,this.el.style.width=null},onPlayedMedia:()=>this.playing=!0,onPausedMedia:()=>this.playing=!1,onEndedMedia:()=>this.overlay.show=!0})):t("slot",{name:"unauthorized",slot:"preview"}),t("div",{slot:"title"},this.heading||"Playlist"),t("div",{slot:"count"},this.items.length," ",this.items.length>1?u:h),this.items.map((i=>{var l,e,s,r;return t("presto-playlist-item",{slot:"list",onClick:()=>this.handleItemClick(i),active:(null===(l=this.currentPlaylistItem)||void 0===l?void 0:l.id)===(null==i?void 0:i.id),playing:(null===(e=this.currentPlaylistItem)||void 0===e?void 0:e.id)===(null==i?void 0:i.id)&&this.playing,class:(null===(s=this.currentPlaylistItem)||void 0===s?void 0:s.id)===(null==i?void 0:i.id)?"active":"",key:null==i?void 0:i.id,onTriggerPause:()=>this.handlePause(),onTriggerPlay:()=>this.handlePlay()},t("span",{slot:"item-title"},t("span",null,(null==i?void 0:i.title)||(null===(r=null==i?void 0:i.config)||void 0===r?void 0:r.title))),t("span",{slot:"item-duration"},t("span",null,null==i?void 0:i.duration)))})))}get el(){return s(this)}static get watchers(){return{currentPlyr:["handleCurrentPlay"]}}};d.style=o;export{d as presto_playlist};