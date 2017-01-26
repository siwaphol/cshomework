export function RoutesConfig($stateProvider, $urlRouterProvider) {
	'ngInject';

	let getView = (viewName) => {
		return `./views/app/pages/${viewName}/${viewName}.page.html`;
	};

	let getAdminView = (viewName) => {
	    return `./views/app/pages/admin/${viewName}/${viewName}.page.html`;
    };

	$urlRouterProvider.otherwise('/');

	$stateProvider
		.state('app', {
			abstract: true,
            data: {},//{auth: true} would require JWT auth
			views: {
				header: {
					templateUrl: getView('header')
				},
				footer: {
					templateUrl: getView('footer')
				},
				main: {}
			}
		})
		.state('app.landing', {
            url: '/',
            views: {
                'main@': {
                    templateUrl: getView('landing')
                }
            }
        })
        .state('app.login', {
			url: '/login',
			views: {
				'main@': {
					templateUrl: getView('login')
				}
			}
		})
        .state('app.register', {
            url: '/register',
            views: {
                'main@': {
                    templateUrl: getView('register')
                }
            }
        })
        .state('app.forgot_password', {
            url: '/forgot-password',
            views: {
                'main@': {
                    templateUrl: getView('forgot-password')
                }
            }
        })
        .state('app.after-login', {
            url: '/after-login',
            views: {
                'main@': {
                    templateUrl: getView('after-login')
                }
            }
        })
        .state('app.reset_password', {
            url: '/reset-password/:email/:token',
            views: {
                'main@': {
                    templateUrl: getView('reset-password')
                }
            }
        })
        .state('admin',{
            abstract: true,
            data: {},//{auth: true} would require JWT auth
            views: {
                header: {
                    templateUrl: getAdminView('header')
                },
                footer: {
                    templateUrl: getAdminView('footer')
                },
                main: {}
            }
        })
        .state('admin.landing', {
            url: '/admin',
            views: {
                'main@': {
                    templateUrl: getAdminView('landing')
                }
            }
        });
}
