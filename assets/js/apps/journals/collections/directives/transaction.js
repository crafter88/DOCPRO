angular.module('journals')
		.directive('addProductServicesBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-product-services-btn-function class='btn btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addProductServicesBtnFunction', function($compile){
			return{
				restrict: 'A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(event){
						event.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('product-services-table')).append($compile(
							"<tr>"+
								"<td><input class='form-control' type='text' name='product_services_code[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='product_services_description[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='product_services_qty[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='product_services_unit[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='product_services_unit_price[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='product_services_gross_amount[]' style='text-align: center;'></td>"+
								"<td><button class='btn btn-danger btn-xs' ng-click='delete_row($event)' type='button'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
					
				}
			}
		})
		.directive('addVatBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-vat-btn-function class='btn btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addVatBtnFunction', function($compile){
			return{
				restrict: 'E,A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(event){
						event.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('vat-table')).append($compile(
							"<tr>"+
								"<td><input class='form-control' type='text' name='tax_code[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='nature[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='vat[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='net_vat_amount[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='gross_amount[]' style='text-align: center;'></td>"+
								"<td><button class='btn btn-danger btn-xs' ng-click='delete_row($event)' type='button'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
				}
			}
		})
		.directive('addDiscountsBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-discounts-btn-function class='btn btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addDiscountsBtnFunction', function($compile){
			return{
				restrict: 'A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('discounts-table')).append($compile(
							"<tr>"+
								"<td><input class='form-control' type='text' name='deduction_code[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='nature[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='tax_base[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='tax_withheld[]' style='text-align: center;'></td>"+
								"<td><button class='btn btn-danger btn-xs' ng-click='delete_row($event)' type='button'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
				}
			}
		})
		.directive('addExpandedTaxBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-expanded-tax-btn-function class='btn btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addExpandedTaxBtnFunction', ['$compile', function($compile){
			return{
				retstrict: 'A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('expanded-tax-table')).append($compile(
							"<tr>"+
								"<td><input class='form-control' type='text' name='tax_code[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='nature[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='tax_base[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='tax_withheld[]' style='text-align: center;'></td>"+
								"<td><button class='btn btn-danger btn-xs' ng-click='delete_row($event)' type='button'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
				}
			}
		}])
		.directive('addFinalWithholdingTaxBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-final-withholding-tax-btn-function class='btn btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addFinalWithholdingTaxBtnFunction', function($compile){
			return{
				restrict: 'A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('final-withholding-tax-table')).append($compile(
							"<tr>"+
								"<td><input class='form-control' type='text' name='tax_code[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='nature[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='rate[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='tax_base[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='tax_withheld[]' style='text-align: center;'></td>"+
								"<td><button class='btn btn-danger btn-xs' ng-click='delete_row($event)' type='button'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
				}
			}
		})
		.directive('addDocumentReferenceBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-document-reference-btn-function class='btn btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addDocumentReferenceBtnFunction', function($compile){
			return{
				restrict: 'A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('document-reference-table')).append($compile(
							"<tr>"+
								"<td><input class='form-control' type='text' name='code[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='number[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='date[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='gross_amount[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='net_amount[]' style='text-align: center;'></td>"+
								"<td><button class='btn btn-danger btn-xs' ng-click='delete_row($event)' type='button'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
				}
			}
		})
		.directive('addBankDetailsBtn', function(){
			return{
				restrict: 'E',
				template: "<button add-bank-details-btn-function class='btn btn-info btn-xs' type='button'>add row</button>"
			}
		})
		.directive('addBankDetailsBtnFunction', function($compile){
			return{
				restrict: 'A',
				scope: {},
				controller: function($scope){
					$scope.delete_row = function(element){
						element.target.closest('tr').remove();
					}
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						angular.element(document.getElementById('bank-details-table')).append($compile(
							"<tr>"+
								"<td><input class='form-control' type='text' name='code[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='name[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='account_number[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='document[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='amount[]' style='text-align: center;'></td>"+
								"<td><input class='form-control' type='text' name='date[]' style='text-align: center;'></td>"+
								"<td><button class='btn btn-danger btn-xs' ng-click='delete_row($event)' type='button'><i class='fa fa-times'></i></button></td>"+
							"</tr>"
						)(scope))
					})
				}
			}
		})
//Document
		.directive('cashCreditBtn', function($compile){
			return{
				restrict: 'E',
				controller: function($scope){
					$scope.set_type_of_payment = function(event){
						var type = event.target.attributes.payment_type.value;
						$scope.type_of_payment = type;
					}
				},
				template: function(){
					return "<button payment_type='Cash' ng-click='set_type_of_payment($event)' class='btn cash-credit' style='margin-right: 5px;'>Cash</button>"+
							"<button payment_type='Charge' ng-click='set_type_of_payment($event)' class='btn cash-credit'>Charge</button>";
				}
			}
		})