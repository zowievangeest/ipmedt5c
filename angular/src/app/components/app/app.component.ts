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

  // pusher service instansieren
  private scangame: PusherService;

  // constructor met router
  constructor(private router: Router) {}

  // angular init
  ngOnInit() {

    // game scan aanzetten
    this.scanGamePusher();
  }

  // functie voor het inscannen van games die altijd aanstaat
  private scanGamePusher(): void {
    // luisteren naar pusher wanneer een uuid binnen komt
    this.scangame = new PusherService('scan-game', 'game.scanned');

    // Subscriben aan een nieuwe video zo ja redirect naar video / uuid wordt later opgevangen in de video comp
    this.scangame.messages.subscribe((data: any | pusher) => {
      if (typeof (data.size) === 'undefined') {
        this.router.navigateByUrl(`/video/${data.uid}`);
      }
    });
  }
}
