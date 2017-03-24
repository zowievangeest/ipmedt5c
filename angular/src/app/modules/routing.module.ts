import {Routes, RouterModule} from "@angular/router";
import {NgModule} from "@angular/core";
import {LoginComponent} from "../login/login.component";

const routes: Routes = [
    // {
    //     path: '',
    //     pathMatch: 'full'
    // },
    {
        path: 'login',
        component: LoginComponent
    }
];

@NgModule({
    imports: [
        RouterModule.forRoot(routes)
    ]
})

export class RoutingModule{}