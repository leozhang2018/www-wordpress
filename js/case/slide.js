var Parent = Vue.extend({
        template: '#img-slider',
        components: {
            'Modal': {
                template: '#modal-template'
            }
        },
        data: function() {
            return {
                currentIdx: 0,
                currentLeft: 0 + 'px',
                customerData: customerData,
                styleObject: null
            }
        },
        computed: {
            getClass: {
                get: function() {
                    var imgArray = this.customerData;
                    return {
                        width: imgArray.length * 360 + 'px',
                        left: this.currentLeft
                    }
                },
                set: function(currentIdx) {
                    this.currentLeft = -360 * currentIdx + 'px';
                    this.videoID = currentIdx;
                }
            }
        },
        methods: {
            turn: function(i) {
                var now = this.currentIdx + i;
                var imgArray = this.customerData;
                if (now < 0) {
                    now = 0;
                }
                if (now >= imgArray.length) {
                    now = now - imgArray.length;
                }
                this.getClass = now;
                this.currentIdx = now;
            },
            turnToPrev: function() {
                this.turn(-1);
            },
            turnToNext: function() {
                this.turn(1);
            },
            showDetails: function(imgID) {
                this.getClass = Number(imgID);
                this.currentIdx = Number(imgID);
            }
        },
        ready: function() {}
    })
    // 全局注册 Parent 组件
Vue.component('img-slider', Parent);
var videoSlide = new Vue({
    el: '#slide-case'
})