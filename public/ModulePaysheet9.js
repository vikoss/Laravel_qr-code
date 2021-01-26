(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["ModulePaysheet9"],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _services_nicolasRomero_getTax__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./../../services/nicolasRomero/getTax */ "./resources/js/services/nicolasRomero/getTax.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'ViewDetails',
  data: function data() {
    return {
      tax: {}
    };
  },
  created: function created() {
    this.getDetails();
  },
  methods: {
    getDetails: function getDetails() {
      var _this = this;

      var pathArray = window.location.pathname.split('/');
      var lengthArray = pathArray.length;
      var pathName = "".concat(pathArray[lengthArray - 2], "/").concat(pathArray[lengthArray - 1]);
      console.log(pathName);
      Object(_services_nicolasRomero_getTax__WEBPACK_IMPORTED_MODULE_0__["getTax"])(pathName).then(function (response) {
        console.log(response);
        _this.tax = response;
      })["catch"](function (error) {
        console.log(error);
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=template&id=195e1b5e&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=template&id=195e1b5e& ***!
  \***********************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "container" }, [
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-sm" }, [
        _c("img", {
          staticStyle: { width: "100%", height: "auto" },
          attrs: { src: "/images/nr_logo.jpg", alt: "Logo Nicolas Romero" }
        })
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm" }, [
        _c("h1", { staticClass: "h2" }, [
          _vm._v("Municipio Nicolas Romero, Mexico")
        ]),
        _vm._v(" "),
        _c("h2", { staticClass: "h3" }, [_vm._v("Certificaciones Vigentes")]),
        _vm._v(" "),
        _c("h4", [
          _vm._v("\n            Nombre:\n            "),
          _c("small", { staticClass: "text-muted" }, [
            _vm._v(_vm._s(_vm.tax.NOMBRE))
          ])
        ]),
        _vm._v(" "),
        _c("h4", [
          _vm._v("\n            Certificado:\n            "),
          _c("small", { staticClass: "text-muted" }, [
            _vm._v(_vm._s(_vm.tax.CERTIFICACION))
          ])
        ]),
        _vm._v(" "),
        _c("h4", [
          _vm._v("\n            Folio:\n            "),
          _c("small", { staticClass: "text-muted" }, [
            _vm._v(_vm._s(_vm.tax.FOLIO))
          ])
        ]),
        _vm._v(" "),
        _c("h4", [
          _vm._v("\n            Vigencia(Bimestre):\n            "),
          _c("small", { staticClass: "text-muted" }, [
            _vm._v(_vm._s(_vm.tax.VIGENCIA))
          ])
        ])
      ])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/pages/nicolasRomero/ViewDetails.vue":
/*!**********************************************************!*\
  !*** ./resources/js/pages/nicolasRomero/ViewDetails.vue ***!
  \**********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _ViewDetails_vue_vue_type_template_id_195e1b5e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ViewDetails.vue?vue&type=template&id=195e1b5e& */ "./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=template&id=195e1b5e&");
/* harmony import */ var _ViewDetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ViewDetails.vue?vue&type=script&lang=js& */ "./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _ViewDetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _ViewDetails_vue_vue_type_template_id_195e1b5e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _ViewDetails_vue_vue_type_template_id_195e1b5e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/nicolasRomero/ViewDetails.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=script&lang=js&":
/*!***********************************************************************************!*\
  !*** ./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewDetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./ViewDetails.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewDetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=template&id=195e1b5e&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=template&id=195e1b5e& ***!
  \*****************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewDetails_vue_vue_type_template_id_195e1b5e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./ViewDetails.vue?vue&type=template&id=195e1b5e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/nicolasRomero/ViewDetails.vue?vue&type=template&id=195e1b5e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewDetails_vue_vue_type_template_id_195e1b5e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ViewDetails_vue_vue_type_template_id_195e1b5e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/services/nicolasRomero/getTax.js":
/*!*******************************************************!*\
  !*** ./resources/js/services/nicolasRomero/getTax.js ***!
  \*******************************************************/
/*! exports provided: getTax */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getTax", function() { return getTax; });
/* harmony import */ var _baseURL__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./../baseURL */ "./resources/js/services/baseURL.js");

function getTax(pathName) {
  return axios.get("".concat(_baseURL__WEBPACK_IMPORTED_MODULE_0__["baseURL"], "/nicolas_romero/ver_vigencia/").concat(pathName)).then(function (response) {
    return response.data;
  })["catch"](function (error) {
    return console.error(error);
  });
}

/***/ })

}]);