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
				controller: function($scope){
					$scope.product_services_array = [];
					$scope.product_services_array.push({code: '', qty: '', unit: '', unit_price: '', gross_amount: '', delete_btn: false});
					$scope.delete_row = function(event, index){
						$scope.product_services_array.splice(index, 1);
					}
					
					//Product Services Code List
					$scope.product_services_code = [
									{code: 1, description: 'Desc 1'},
									{code: 2, description: 'Desc 2'},
									{code: 3, description: 'Desc 3'},
									{code: 4, description: 'Desc 4'},
									{code: 5, description: 'Desc 5'},
									{code: 6, description: 'Desc 6'},
									{code: 7, description: 'Desc 7'},
									{code: 8, description: 'Desc 8'},
									{code: 9, description: 'Desc 9'},
									{code: 10, description: 'Desc 10'},
									];
			
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						console.log(scope.product_services_array);
						scope.$apply(function(){
							scope.product_services_array.push({code: '', qty: '', unit: '', unit_price: '', gross_amount: '', delete_btn: true});
						});
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
				controller: function($scope){
					$scope.vat_array = [];
					$scope.vat_array.push({code: '', nature: '', rate: '', vat: '', net_vat: '', gross_amount: '', delete_btn: false});
					$scope.vat_delete_row = function(event, index){
						$scope.vat_array.splice(index, 1);
					}
					
					//VAT Code List
					$scope.vat_code = [
									{code: 1, rate: '1%'},
									{code: 2, rate: '2%'},
									{code: 3, rate: '3%'},
									{code: 4, rate: '4%'},
									{code: 5, rate: '5%'},
									{code: 6, rate: '6%'},
									{code: 7, rate: '7%'},
									{code: 8, rate: '8%'},
									{code: 9, rate: '9%'},
									{code: 10, rate: '10%'},
									];
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.vat_array.push({code: '', nature: '', rate: '', vat: '', net_vat: '', gross_amount: '', delete_btn: true});
						});
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
				restrict: 'E,A',
				controller: function($scope){
					$scope.discount_array = [];
					$scope.discount_array.push({code: '', nature: '', rate: '', tax_base: '', tax_withheld: '', delete_btn: false});
					$scope.discount_delete_row = function(event, index){
						$scope.discount_array.splice(index, 1);
					}
					
					//Discount Code List
					$scope.discount_code = [
									{code: 1},
									{code: 2},
									{code: 3},
									{code: 4},
									{code: 5},
									{code: 6},
									{code: 7},
									{code: 8},
									{code: 9},
									{code: 10},
									];
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.discount_array.push({code: '', nature: '', rate: '', tax_base: '', tax_withheld: '', delete_btn: true});
						});
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
				controller: function($scope){
					$scope.bank_array = [];
					$scope.bank_array.push({code: '', name: '', account_number: '', document: '', amount: '', date: '', delete_btn: false});
					
					$scope.bank_delete_row = function(element, index){
						$scope.bank_array.splice(index, 1);
					}
					
					$scope.account_code = [
											{code: 1, name: 'Bank 1'},
											{code: 2, name: 'Bank 2'},
											{code: 3, name: 'Bank 3'},
											{code: 4, name: 'Bank 4'},
											{code: 5, name: 'Bank 5'},
											{code: 6, name: 'Bank 6'},
											{code: 7, name: 'Bank 7'},
										];
					$scope.account_number = [
											{account_number: 'Acc 1'},
											{account_number: 'Acc 2'},
											{account_number: 'Acc 3'},
											{account_number: 'Acc 4'},
											{account_number: 'Acc 5'},
											{account_number: 'Acc 6'},
											{account_number: 'Acc 7'},
										];
					$scope.bank_document = [
											{document: 'Docu 1'},
											{document: 'Docu 2'},
											{document: 'Docu 3'},
											{document: 'Docu 4'},
											{document: 'Docu 5'},
											{document: 'Docu 6'},
											{document: 'Docu 7'},
										];
				},
				link: function(scope, element, attrs){
					element.bind('click', function(){
						scope.$apply(function(){
							scope.bank_array.push({code: '', name: '', account_number: '', document: '', amount: '', date: '', delete_btn: true});
						});
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