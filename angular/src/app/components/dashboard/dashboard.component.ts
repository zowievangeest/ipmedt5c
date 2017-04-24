import {AfterViewInit, Component} from '@angular/core';
import {StatisticsService} from "../../services/statistics/statistics.service";
import {IntervalObservable} from "rxjs/observable/IntervalObservable";

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements AfterViewInit {

  // piechar variables
  public chart1_pieChartLabels: Array<string>;
  public chart1_pieChartData: Array<number>;
  public chart1_total: number = 0;
  public chart1_chartType: string = "pie";
  public chart1_title: string = "Gescande games";

  public chart2_barChartLabels: Array<any>;
  public chart2_barChartData: Array<any>;
  public chart2_total: number = 0;
  public chart2_chartType: string = "doughnut";
  public chart2_title: string = "Gescande producten";

  public chart3_lineChartLabels: Array<any>;
  public chart3_lineChartData: Array<any>;
  public chart3_total: number = 0;
  public chart3_chartType: string = "bar";
  public chart3_title: string = "Gescande games per dag";

  // constructor
  constructor(private statisticsService: StatisticsService) { }

  // data uit laravel
  private chart_1_data(): void {
    // data ophalen van statistics
    this.statisticsService.getPlatformViews().subscribe(
        (res: any) => {

          this.chart1_pieChartLabels = [];
          this.chart1_pieChartData = [];
          this.chart1_total = 0;

          for (let platform in res) {
            if (res.hasOwnProperty(platform)) {
              this.chart1_pieChartLabels.push(res[platform].name);
              this.chart1_pieChartData.push(res[platform].statistics.views.length);

              this.chart1_total += res[platform].statistics.views.length;
            }
          }
        }
    );
  }

  public barChartOptions:any = {
    scaleShowVerticalLines: false,
    responsive: true
  };

  private chart_2_data(): void {
    // data ophalen van statistics
    this.statisticsService.getProductViews().subscribe(
        (res: any) => {

          const data = [];
          const labels = [];

          for (let product in res) {
            if (res.hasOwnProperty(product)) {

              data.push(res[product].statistics.views.length);
              labels.push(res[product].game.name);

            }
          }

          this.chart2_barChartData = [{ data: data, label: 'Gescand vandaag'}];
          this.chart2_barChartLabels = labels;
        }
    );
  }

  private chart_3_data(): void {
    // data ophalen van statistics
    this.statisticsService.getGameViews().subscribe(
        (res: any) => {

          const labels = ['Gescande Games'];

          let vandaag = 0;
          let gister = 0;

          for (let game in res) {
            if (res.hasOwnProperty(game)) {
              for (let view in res[game].statistics.views) {
                if (res[game].statistics.views.hasOwnProperty(view)) {
                  // console.log(res[game].statistics.views[view]);
                  const todayPhp = res[game].statistics.views[view].date.substring(0,10);
                  const todayDate = new Date().toISOString().slice(0,10);

                  if (todayDate === todayPhp){
                    vandaag += 1;
                  } else {
                    gister += 1;
                  }
                }
              }
            }
          }

          this.chart3_lineChartData = [{ data: [vandaag], label: 'Vandaag'}, { data: [gister], label: 'Gisteren'}];
          this.chart3_lineChartLabels = labels;
        }
    );
  }

  ngAfterViewInit(): void {
    this.chart_1_data();
    this.chart_2_data();
    this.chart_3_data();

    // elke 5 seconden data verversen voor live data
    IntervalObservable.create(5000).subscribe(() => {
      this.chart_1_data();
      this.chart_2_data();
      this.chart_3_data();
    });
  }

}
