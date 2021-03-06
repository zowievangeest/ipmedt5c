import { Injectable } from '@angular/core';
import { List } from 'immutable';
import * as Pusher from 'pusher-js';
import {BehaviorSubject, Observable} from "rxjs";
import {PUSHER_KEY} from "../../../constants";
import {pusher } from '../../interfaces/pusher.interface';

@Injectable()
export class PusherService {

  private pusher: any;

  private _messages: BehaviorSubject<List<pusher>> = new BehaviorSubject(List([]));
  public messages: Observable<List<pusher>> = this._messages.asObservable();

  constructor(private channelName: string,
              private event: string) {

    this.pusher = new Pusher(PUSHER_KEY, {
      disableStats: true,
      cluster: 'eu'
    });

    let channel = this.pusher.subscribe(channelName);

    channel.bind(event, (data) => {
      this._messages.next(data);
    });
  }

}