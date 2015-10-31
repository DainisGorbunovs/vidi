SurvivalRate
===================

Application for presenting mortality rates in children for various diseases based on area.

----------

### Map rendering guide that may be useful

https://parall.ax/blog/view/2985/tutorial-creating-an-interactive-svg-map

### Polymer guide

The polymer developer guide is located here:

https://www.polymer-project.org/1.0/docs/devguide/feature-overview.html

js code seems to go under the /app/scripts directory.

### Running the site
Server uses the app.js in the root, and serves the files and elements in the "app" folder.

In order to run the polymer application, navigate into the project folder and run commands:

```
npm install
bower install
node app.js
```

### Installing Bower
```
#(may need sudo permissions)
npm install bower
```
### Datasources

List of databases: (includes potential databases, some may not be useful, please add a * or some indicator to databases you think may be useful).

- API based on data.gov.uk | Download JSON directly | http://www.opendatadeveloper.co.uk/Docs/HealthPrevalence/

- Main page: https://data.gov.uk/data/search?q=child+mortality&page=1
- https://data.gov.uk/dataset/child_mortality_statistics-childhood_infant_and_perinatal
- https://data.gov.uk/dataset/childhood_hospital_admissions_and_mortality/resource/0a8c3292-f5b6-4453-ba23-dbc74bb8c809
- http://www.isdscotlandarchive.scot.nhs.uk/isd/4320.html
- https://data.gov.uk/dataset/infant_mortality_by_ethnic_group/resource/1d1d8178-6eae-4ec4-8027-58f39918be87
- https://data.gov.uk/dataset/infant-mortality-nhsof-1-6-i
-https://data.gov.uk/dataset/infant_and_perinatal_mortality_in_england_and_wales_by_social_and_biological_factors
- https://data.gov.uk/dataset/five-year-survival-from-all-cancers-in-children-formerly-indicator-1-6-iii-nhsof-1-6-ii/resource/64368ff8-0dda-41d1-b66a-ae2027a560eb
- https://data.gov.uk/dataset/standardised_mortality_ratios
- https://data.gov.uk/dataset/standardised_mortality_ratios
- https://data.gov.uk/dataset/cancer_incidence_and_mortality/resource/09b08384-1b1f-4dd5-9580-73db8619f348
- http://www.ons.gov.uk/ons/rel/cancer-unit/cancer-incidence-and-mortality/2008-2010/index.html
- http://www.isdscotland.org/Health-Topics/Cancer/Cancer-Statistics/
- https://data.gov.uk/dataset/mortality_monitoring_bulletin

Need links for regional statistics(?)

-http://www.ons.gov.uk/ons/rel/cancer-unit/combined-cancer-survival-by-primary-care-trusts/patients-diagnosed-1996-2010--followed-up-to-2011/index.html
(Cancer survival statistics by Primary Care Trust (PCT) but not age)

Some data on hospitals:

- https://data.gov.uk/dataset/hospitals_
- https://data.gov.uk/dataset/hospital_statistics
- http://www.bbc.co.uk/news/health-15897345