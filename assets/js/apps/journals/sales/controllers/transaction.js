angular.module('journals')
		.controller('transaction', ['$scope', function($scope){
			var today = new Date();
			$scope.transaction_date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
			$scope.transaction_id = 1;
			$scope.journal_transaction_id = 2;
			
			$scope.document_name = 'Sales Journal';
			
			
			//try
			$scope.business_partner_address = 'Baguio City';
			$scope.business_partner_tin = '4536345';
			$scope.business_partner_business_type = 'Merchandise';
			$scope.business_partner_particulars = 'Particulars 1';
		
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