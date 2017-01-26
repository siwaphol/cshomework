class UserTableController{
    constructor(){
        'ngInject';
    }

    $onInit(){
    }
}

export const UserTableComponent = {
    templateUrl: './views/app/components/user-table/user-table.component.html',
    controller: UserTableController,
    controllerAs: 'vm',
    bindings: {}
}
