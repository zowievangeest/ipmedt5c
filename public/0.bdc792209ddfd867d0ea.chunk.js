webpackJsonp([0,8],{"5Pn+":function(t,n,e){"use strict";e.d(n,"a",function(){return l});var l=[""]},GRaa:function(t,n,e){"use strict";function l(t,n){return"rgba("+t.concat(n).join(",")+")"}function r(t,n){return Math.floor(Math.random()*(n-t+1))+t}function a(t){return{backgroundColor:l(t,.4),borderColor:l(t,1),pointBackgroundColor:l(t,1),pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:l(t,.8)}}function o(t){return{backgroundColor:l(t,.6),borderColor:l(t,1),hoverBackgroundColor:l(t,.8),hoverBorderColor:l(t,1)}}function u(t){return{backgroundColor:t.map(function(t){return l(t,.6)}),borderColor:t.map(function(){return"#fff"}),pointBackgroundColor:t.map(function(t){return l(t,1)}),pointBorderColor:t.map(function(){return"#fff"}),pointHoverBackgroundColor:t.map(function(t){return l(t,1)}),pointHoverBorderColor:t.map(function(t){return l(t,1)})}}function i(t){return{backgroundColor:t.map(function(t){return l(t,.6)}),borderColor:t.map(function(t){return l(t,1)}),hoverBackgroundColor:t.map(function(t){return l(t,.8)}),hoverBorderColor:t.map(function(t){return l(t,1)})}}function s(){return[r(0,255),r(0,255),r(0,255)]}function c(t){return f.defaultColors[t]||s()}function h(t){for(var n=new Array(t),e=0;e<t;e++)n[e]=f.defaultColors[e]||s();return n}function d(t,n,e){return"pie"===t||"doughnut"===t?u(h(e)):"polarArea"===t?i(h(e)):"line"===t||"radar"===t?a(c(n)):"bar"===t||"horizontalBar"===t?o(c(n)):c(n)}var p=e("3j3K"),f=function(){function t(t){this.labels=[],this.options={},this.chartClick=new p.EventEmitter,this.chartHover=new p.EventEmitter,this.initFlag=!1,this.element=t}return t.prototype.ngOnInit=function(){this.ctx=this.element.nativeElement.getContext("2d"),this.cvs=this.element.nativeElement,this.initFlag=!0,(this.data||this.datasets)&&this.refresh()},t.prototype.ngOnChanges=function(t){this.initFlag&&(t.hasOwnProperty("data")||t.hasOwnProperty("datasets")?(t.data?this.updateChartData(t.data.currentValue):this.updateChartData(t.datasets.currentValue),this.chart.update()):this.refresh())},t.prototype.ngOnDestroy=function(){this.chart&&(this.chart.destroy(),this.chart=void 0)},t.prototype.getChartBuilder=function(t){var n=this,e=this.getDatasets(),l=Object.assign({},this.options);this.legend===!1&&(l.legend={display:!1}),l.hover=l.hover||{},l.hover.onHover||(l.hover.onHover=function(t){t&&!t.length||n.chartHover.emit({active:t})}),l.onClick||(l.onClick=function(t,e){n.chartClick.emit({event:t,active:e})});var r={type:this.chartType,data:{labels:this.labels,datasets:e},options:l};if("undefined"==typeof Chart)throw new Error("ng2-charts configuration issue: Embedding Chart.js lib is mandatory");return new Chart(t,r)},t.prototype.updateChartData=function(t){Array.isArray(t[0].data)?this.chart.data.datasets.forEach(function(n,e){n.data=t[e].data,t[e].label&&(n.label=t[e].label)}):this.chart.data.datasets[0].data=t},t.prototype.getDatasets=function(){var t=this,n=void 0;if((!this.datasets||!this.datasets.length&&this.data&&this.data.length)&&(n=Array.isArray(this.data[0])?this.data.map(function(n,e){return{data:n,label:t.labels[e]||"Label "+e}}):[{data:this.data,label:"Label 0"}]),(this.datasets&&this.datasets.length||n&&n.length)&&(n=(this.datasets||n).map(function(n,e){var l=Object.assign({},n);return t.colors&&t.colors.length?Object.assign(l,t.colors[e]):Object.assign(l,d(t.chartType,e,l.data.length)),l})),!n)throw new Error("ng-charts configuration error,\n      data or datasets field are required to render char "+this.chartType);return n},t.prototype.refresh=function(){this.ngOnDestroy(),this.chart=this.getChartBuilder(this.ctx)},t.defaultColors=[[255,99,132],[54,162,235],[255,206,86],[231,233,237],[75,192,192],[151,187,205],[220,220,220],[247,70,74],[70,191,189],[253,180,92],[148,159,177],[77,83,96]],t.decorators=[{type:p.Directive,args:[{selector:"canvas[baseChart]",exportAs:"base-chart"}]}],t.ctorParameters=function(){return[{type:p.ElementRef}]},t.propDecorators={data:[{type:p.Input}],datasets:[{type:p.Input}],labels:[{type:p.Input}],options:[{type:p.Input}],chartType:[{type:p.Input}],colors:[{type:p.Input}],legend:[{type:p.Input}],chartClick:[{type:p.Output}],chartHover:[{type:p.Output}]},t}();n.BaseChartDirective=f;var v=function(){function t(){}return t.decorators=[{type:p.NgModule,args:[{declarations:[f],exports:[f],imports:[]}]}],t.ctorParameters=function(){return[]},t}();n.ChartsModule=v},RlQN:function(t,n,e){"use strict";Object.defineProperty(n,"__esModule",{value:!0});var l=e("3j3K"),r=e("lXXI"),a=e("2Je8"),o=e("GRaa"),u=(e.n(o),e("5oXY")),i=e("p/GT"),s=e("k6Lt"),c=e("Fzro"),h=e("cikh");e.d(n,"DashboardModuleNgFactory",function(){return f});var d=this&&this.__extends||function(t,n){function e(){this.constructor=t}for(var l in n)n.hasOwnProperty(l)&&(t[l]=n[l]);t.prototype=null===n?Object.create(n):(e.prototype=n.prototype,new e)},p=function(t){function n(n){return t.call(this,n,[s.a],[])||this}return d(n,t),Object.defineProperty(n.prototype,"_NgLocalization_4",{get:function(){return null==this.__NgLocalization_4&&(this.__NgLocalization_4=new a.NgLocaleLocalization(this.parent.get(l.LOCALE_ID))),this.__NgLocalization_4},enumerable:!0,configurable:!0}),Object.defineProperty(n.prototype,"_StatisticsService_6",{get:function(){return null==this.__StatisticsService_6&&(this.__StatisticsService_6=new i.a(this.parent.get(c.k))),this.__StatisticsService_6},enumerable:!0,configurable:!0}),n.prototype.createInternal=function(){return this._CommonModule_0=new a.CommonModule,this._ChartsModule_1=new o.ChartsModule,this._RouterModule_2=new u.q(this.parent.get(u.r,null),this.parent.get(u.g,null)),this._DashboardModule_3=new r.a,this._ROUTES_5=[[{path:"",component:h.a,pathMatch:"full"}]],this._DashboardModule_3},n.prototype.getInternal=function(t,n){return t===a.CommonModule?this._CommonModule_0:t===o.ChartsModule?this._ChartsModule_1:t===u.q?this._RouterModule_2:t===r.a?this._DashboardModule_3:t===a.NgLocalization?this._NgLocalization_4:t===u.u?this._ROUTES_5:t===i.a?this._StatisticsService_6:n},n.prototype.destroyInternal=function(){},n}(l["ɵNgModuleInjector"]),f=new l.NgModuleFactory(p,r.a)},cikh:function(t,n,e){"use strict";var l=e("p/GT"),r=e("bZY+");e.n(r);e.d(n,"a",function(){return a});var a=function(){function t(t){this.statisticsService=t,this.total=0,this.chartType="pie",this.title="Acties"}return t.prototype.data=function(){var t=this;this.statisticsService.getPlatformViews().subscribe(function(n){t.pieChartLabels=[],t.pieChartData=[],t.total=0;for(var e in n)n.hasOwnProperty(e)&&(t.pieChartLabels.push(n[e].name),t.pieChartData.push(n[e].statistics.views.length),t.total+=n[e].statistics.views.length)})},t.prototype.ngAfterViewInit=function(){var t=this;this.data(),r.IntervalObservable.create(5e3).subscribe(function(){t.data()})},t.ctorParameters=function(){return[{type:l.a}]},t}()},k6Lt:function(t,n,e){"use strict";function l(t){return u["ɵvid"](0,[(t()(),u["ɵeld"](0,null,null,1,"canvas",[["baseChart","baseChart"]],null,null,null,null,null)),u["ɵdid"](368640,null,0,i.BaseChartDirective,[u.ElementRef],{data:[0,"data"],labels:[1,"labels"],chartType:[2,"chartType"]},null)],function(t,n){var e=n.component;t(n,1,0,e.pieChartData,e.pieChartLabels,e.chartType)},null)}function r(t){return u["ɵvid"](0,[(t()(),u["ɵeld"](0,null,null,34,"div",[["class","container"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["\n    "])),(t()(),u["ɵeld"](0,null,null,7,"div",[["class","row my-5"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["\n        "])),(t()(),u["ɵeld"](0,null,null,4,"div",[["class","col-md-12"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["\n            "])),(t()(),u["ɵeld"](0,null,null,1,"h1",[["class","text-center"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["Dashboard"])),(t()(),u["ɵted"](null,["\n        "])),(t()(),u["ɵted"](null,["\n    "])),(t()(),u["ɵted"](null,["\n    "])),(t()(),u["ɵeld"](0,null,null,22,"div",[["class","row my-5"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["\n        "])),(t()(),u["ɵeld"](0,null,null,7,"div",[["class","col-md-4"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["\n            "])),(t()(),u["ɵeld"](0,null,null,1,"h3",[["class","text-center"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["Chart 1 -- ",""])),(t()(),u["ɵted"](null,["\n            "])),(t()(),u["ɵand"](8388608,null,null,1,null,l)),u["ɵdid"](8192,null,0,s.NgIf,[u.ViewContainerRef,u.TemplateRef],{ngIf:[0,"ngIf"]},null),(t()(),u["ɵted"](null,["\n        "])),(t()(),u["ɵted"](null,["\n        "])),(t()(),u["ɵeld"](0,null,null,4,"div",[["class","col-md-4"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["\n            "])),(t()(),u["ɵeld"](0,null,null,1,"h3",[["class","text-center"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["Chart 2"])),(t()(),u["ɵted"](null,["\n        "])),(t()(),u["ɵted"](null,["\n        "])),(t()(),u["ɵeld"](0,null,null,4,"div",[["class","col-md-4"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["\n            "])),(t()(),u["ɵeld"](0,null,null,1,"h3",[["class","text-center"]],null,null,null,null,null)),(t()(),u["ɵted"](null,["Chart 3"])),(t()(),u["ɵted"](null,["\n        "])),(t()(),u["ɵted"](null,["\n    "])),(t()(),u["ɵted"](null,["\n"])),(t()(),u["ɵted"](null,["\n"]))],function(t,n){t(n,19,0,n.component.pieChartData)},function(t,n){t(n,16,0,n.component.total)})}function a(t){return u["ɵvid"](0,[(t()(),u["ɵeld"](0,null,null,1,"app-dashboard",[],null,null,null,r,p)),u["ɵdid"](2121728,null,0,c.a,[h.a],null,null)],null,null)}var o=e("5Pn+"),u=e("3j3K"),i=e("GRaa"),s=(e.n(i),e("2Je8")),c=e("cikh"),h=e("p/GT");e.d(n,"a",function(){return f});var d=[o.a],p=u["ɵcrt"]({encapsulation:0,styles:d,data:{}}),f=u["ɵccf"]("app-dashboard",c.a,a,{},{},[])},lXXI:function(t,n,e){"use strict";e.d(n,"a",function(){return l});var l=function(){function t(){}return t}()},"p/GT":function(t,n,e){"use strict";var l=e("Gvdl"),r=(e.n(l),e("eGji")),a=e("Fzro");e.d(n,"a",function(){return o});var o=function(){function t(t){this.http=t;var n=new a.l;n.append("Authorization","Bearer "+localStorage.getItem("token")),this.getOptions=new a.j({headers:n})}return t.prototype.getPlatformViews=function(){return this.http.get(r.a+"statistics/platforms",this.getOptions).map(function(t){return t.json()}).map(function(t){return t.platforms}).catch(function(t){return 401==t.status?l.Observable.throw(t.status):500==t.status?l.Observable.throw(t.status):void 0})},t.ctorParameters=function(){return[{type:a.k}]},t}()}});