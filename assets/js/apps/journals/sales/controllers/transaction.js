angular.module('journals')
		.controller('transaction', ['$scope', function($scope){
		//Document
			var today = new Date();
			$scope.transaction_date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
			$scope.transaction_id = 1;
			$scope.journal_transaction_id = 2;
			
			$scope.document_name = 'Sales Journal';
			
		//Business Partner
			$scope.selected_bp = {};
			$scope.business_partner_array = [
												{name: 'Company 1', address: 'Address 1', tin: '111111', type: 'Merchandise', particulars: 'Particular 1'},
												{name: 'Company 2', address: 'Address 2', tin: '222222', type: 'Manufacturing', particulars: 'Particular 2'},
												{name: 'Company 3', address: 'Address 3', tin: '333333', type: 'Merchandise', particulars: 'Particular 3'},
												{name: 'Company 4', address: 'Address 4', tin: '444444', type: 'Manufacturing', particulars: 'Particular 4'},
												{name: 'Company 5', address: 'Address 5', tin: '555555', type: 'Merchandise', particulars: 'Particular 5'},
											];
			
		//Document Details
			$scope.product_services = [];
		
		}])
		.filter('formatDate', function(){
			return function(date){
				if(date !== undefined){
					return date.getDate()+'/'+(date.getMonth()+1)+'/'+date.getFullYear();
				}
				return '';
			}
		})
		.filter('computeDueDate', function(){
			return function(terms, scope){
				if(terms !== undefined && scope.document_date !== undefined){
					var dueDate = new Date(scope.document_date);
					dueDate.setDate(dueDate.getDate() + terms);
					return dueDate.getDate()+'/'+(dueDate.getMonth() + 1)+'/'+dueDate.getFullYear();
				}
				return '';
			}
		})