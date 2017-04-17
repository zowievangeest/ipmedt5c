import {AfterViewInit, Component} from '@angular/core';
import {StatisticsService} from "../../services/statistics/statistics.service";
import {IntervalObservable} from "rxjs/observable/IntervalObservable";

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements AfterViewInit {

  public pieChartLabels: Array<string>;
  public pieChartData: Array<number>;
  public total: number = 0;
  public chartType: string = "pie";
  public title: string = "Acties";

  constructor(private statisticsService: StatisticsService) { }

  private data(): void {
    this.statisticsService.getPlatformViews().subscribe(
        (res: any) => {

          this.pieChartLabels = [];
          this.pieChartData = [];
          this.total = 0;

          for (let platform in res) {
            if (res.hasOwnProperty(platform)) {
              this.pieChartLabels.push(res[platform].name);
              this.pieChartData.push(res[platform].statistics.views.length);

              this.total += res[platform].statistics.views.length;
            }
          }
        }
    );
  }

  ngAfterViewInit(): void {
    this.data();

    IntervalObservable.create(5000).subscribe(() => {
      this.data();
    });
  }

}
