
<div class='side-body padding-top' id="content-responsive">
	<div class='card'>
		<div class='card-header'>
			<div class='card-title'>
				<div class='title'>Company Docuuments</div>
			</div>
		</div>
		<div class='card-body'>

			 <div role="tabpanel">
                 <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Reports</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Summary</a></li>     
                 </ul>

                 <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active" id="home" ng-app='sortApp' ng-controller='mainController'>
			                <div class='row'>
								<div class='col-md-2'>
									<label>Date:</label>
									<select class='form-control' style='width: 150px' ng-model="searchDate">
										  <option></option>
										  <option value="volvo">Volvo</option>
										  <option value="saab">Saab</option>
										  <option value="opel">Opel</option>
										  <option value="audi">Audi</option>
									 </select>
								 </div>
								 <div class='col-md-2'>
								 <label>Year:</label>
								 		<input class='form-control' type='text' name='year'>
								 </div>
							</div>
                         <table id='banks-table' class='table table-hovered table-bordered' width='100%'>
								<thead>

									<th><a href="#" ng-click="sortType = 'code'; sortReverse = !sortReverse">Code<span ng-show="sortType == 'code' && !sortReverse" class="fa fa-caret-down"></span><span ng-show="sortType == 'code' && sortReverse" class="fa fa-caret-up"></span></a>
									</th>

									<th><a href="#" ng-click="sortType = 'classification'; sortReverse = !sortReverse">Classification<span ng-show="sortType == 'classification' && !sortReverse" class="fa fa-caret-down"></span><span ng-show="sortType == 'classification' && sortReverse" class="fa fa-caret-up"></span></a>
									</th>

									<th><a href="#" ng-click="sortType = 'name'; sortReverse = !sortReverse">Name<span ng-show="sortType == 'name' && !sortReverse" class="fa fa-caret-down"></span><span ng-show="sortType == 'name' && sortReverse" class="fa fa-caret-up"></span></a>
									</th>

									<th><a href="#" ng-click="sortType = 'shortname'; sortReverse = !sortReverse">Shortname<span ng-show="sortType == 'shortname' && !sortReverse" class="fa fa-caret-down"></span><span ng-show="sortType == 'shortname' && sortReverse" class="fa fa-caret-up"></span></a>
									</th>

									<th><a href="#" ng-click="sortType = 'journalname'; sortReverse = !sortReverse">Journal Name<span ng-show="sortType == 'journalname' && !sortReverse" class="fa fa-caret-down"></span><span ng-show="sortType == 'journalname' && sortReverse" class="fa fa-caret-up"></span></a></th>

									<th><a href="#" ng-click="sortType = 'journalshortname'; sortReverse = !sortReverse">Journal Shortname<span ng-show="sortType == 'journalshortname' && !sortReverse" class="fa fa-caret-down"></span><span ng-show="sortType == 'journalshortname' && sortReverse" class="fa fa-caret-up"></span></a></th>

								 </thead>
								 <tbody>
								 	<tr ng-repeat="roll in reports | orderBy:sortType:sortReverse | filter:searchDate">
								 		<td>{{roll.code}}</td>
								 		<td>{{roll.classification}}</td>
								 		<td>{{roll.name}}</td>
								 		<td>{{roll.shortname}}</td>
								 		<td>{{roll.journalname}}</td>
								 		<td>{{roll.journalshortname}}</td>
								 	</tr>
								 </tbody>
							</table>             
                     </div>
                     <div role="tabpanel" class="tab-pane" id="profile">
                     	<table id='banks-table' class='table table-hovered table-bordered' width='100%'>
								<thead>
									<th>Code</th>
									<th>Sequence</th>
									<th>Classification</th>
									<th>Name</th>
									<th>Shortname</th>
									<th>Journal Name</th>
									<th>Journal Shortname</th>
								 </thead>
							</table>     
                     </div>
                  </div>
             </div>
		</div>
	</div>
</div>

