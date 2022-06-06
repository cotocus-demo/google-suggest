# Objective
### Clone following websites
- https://answerthepublic.com/
- https://h-supertools.com/seo/question-explorer

### Module 1 - API
Develope a API which would accept inputs from user with keywords and return the output in JSON with multiple suggested keywords as demo below;

### Module 2 - Web APP
Develope an web app which would call API from webiste, allow user to input keywords and display results in answerthepublic.com or question-explorer



Using API - Get maximum options from google-suggest

One Video
- https://www.youtube.com/watch?v=ofZEo0Rzo5s

API 
- http://suggestqueries.google.com/complete/search
- http://suggestqueries.google.com/complete/search
- http://google.com/complete/search

Example

- http://suggestqueries.google.com/complete/search?output=toolbar&gl=eg&q=devops
- http://suggestqueries.google.com/complete/search?output=toolbar&hl=en&q=devops
- http://suggestqueries.google.com/complete/search?output=firefox&q=devops
- http://google.com/complete/search?client=chrome&q=devops
- http://google.com/complete/search?client=firefox&q=devops

To separate words use %20 or + between them. For example:

- http://suggestqueries.google.com/complete/search?output=toolbar&hl=en&q=devops%20rajesh
- http://suggestqueries.google.com/complete/search?output=toolbar&hl=en&q=devops+rajesh


Reference
- https://stackoverflow.com/questions/5102878/where-is-the-documentation-for-the-google-suggest-api
- http://www.google.com/support/enterprise/static/gsa/docs/admin/70/gsa_doc_set/xml_reference/query_suggestion.html
- http://answers.oreilly.com/topic/1526-how-to-use-the-google-suggest-api-to-come-up-with-topics-for-answers/
- https://developers.google.com/cloud-search/docs/reference/rest/v1/query/search
- https://developers.google.com/cloud-search/docs/reference/rest/v1/query/suggest
