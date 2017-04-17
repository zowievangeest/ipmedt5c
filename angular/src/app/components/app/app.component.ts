import { Component } from '@angular/core';
import {PusherService} from "../../services/pusher/pusher.service";
import {pusher} from "../../interfaces/pusher.interface";
import {Router} from "@angular/router";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {

  private scangame: PusherService;

  constructor(private router: Router) {}

  ngOnInit() {

    this.scanGamePusher();
  }

  private scanGamePusher(): void {
    this.scangame = new PusherService('scan-game', 'game.scanned');

    this.scangame.messages.subscribe((data: any | pusher) => {
      if (typeof (data.size) === 'undefined') {
        this.router.navigateByUrl(`/video/${data.uid}`);
      }
    });
  }
}
