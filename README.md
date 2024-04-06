# Year Holidays
Get the holidays of a region, with respective weekday, by year.

## Available Holidays Classes

- World
- Brazil

## Importing the Package

## How to Use

### Class Instance
Create a new instance of the holidays region you want and pass the
year as string parameter, like the following.

`$brazilHolidays = new brazilHolidaysModel("2024");`

### Response Method

With this method you could get the holidays.

`echo $brazilHolidays->printHolidays();`

```
{
    "main":{
        "2024-01-01":{
            "date":"2024-01-01",
            "name":"universal fraternization",
            "weekday":"monday",
            "coverage":"world"
        },
        "2024-02-13":{
            "date":"2024-02-13",
            "name":"carnaval",
            "weekday":"tuesday",
            "coverage":"brazil"
        },
        "2024-03-29":{
            "date":"2024-03-29",
            "name":"sexta-feira da paixão",
            "weekday":"friday",
            "coverage":"brazil"
        },
        "2024-03-31":{
            "date":"2024-03-31",
            "name":"easter",
            "weekday":"sunday",
            "coverage":"world"
        },
        "2024-04-21":{
            "date":"2024-04-21",
            "name":"tiradentes",
            "weekday":"sunday",
            "coverage":"brazil"
        },
        "2024-05-01":{
            "date":"2024-05-01",
            "name":"labor day",
            "weekday":"wednesday",
            "coverage":"world"
        },
        "2024-05-30":{
            "date":"2024-05-30",
            "name":"corpus christi",
            "weekday":"thursday",
            "coverage":"brazil"
        },
        "2024-09-07":{
            "date":"2024-09-07",
            "name":"independência",
            "weekday":"saturday",
            "coverage":"brazil"
        },
        "2024-10-12":{
            "date":"2024-10-12",
            "name":"nossa senhora aparecida",
            "weekday":"saturday",
            "coverage":"brazil"
        },
        "2024-11-02":{
            "date":"2024-11-02",
            "name":"finados",
            "weekday":"saturday",
            "coverage":"brazil"
        },
        "2024-11-15":{
            "date":"2024-11-15",
            "name":"proclamação da república",
            "weekday":"friday",
            "coverage":"brazil"
        },
        "2024-11-20":{
            "date":"2024-11-20",
            "name":"consciência negra",
            "weekday":"wednesday",
            "coverage":"brazil"
        },
        "2024-12-25":{
            "date":"2024-12-25",
            "name":"christmas",
            "weekday":"wednesday",
            "coverage":"world"
        }
    }
}
```

