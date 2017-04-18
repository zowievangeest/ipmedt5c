import {Injectable} from "@angular/core";
import {CanActivate, Router} from "@angular/router";

@Injectable()
export class LoginGuard implements CanActivate {
    // local storage check
    public static check(): boolean {
        return !!localStorage.getItem('token');
    }

    constructor(private router: Router) {}

    // checken voor login toeken
    canActivate(): boolean {
        if(localStorage.getItem('token')) {
            return true;
        }
        this.redirect('/login');

        return false;
    }

    // redirecten naar de home url
    public redirect(url:string = '/'): void {
        this.router.navigateByUrl(url);
    }
}