TYPO3 Extension "newsttaddress"
============================

This extension adds a relation to the table 'tt_address' to a news record of EXT:news.

**Required**

- TYPO3 CMS 6.2 LTS
- EXT:news 3.2.0
- EXT:tt_address 3.0.0

**License**

GPLv2

Installation
------------

- Install the extension
- Create a tt_address
- Create/Open a news record and select the tt_address in the last tab

Templates
---------

You can output the tt_address by using ``{newsItem.address}``. As an example: ::

	<f:if condition="{newsItem.address}">
		<div>
			<h3>Name: {newsItem.address.company}</h3>
			<p>{newsItem.address.firstName} {newsItem.address.lastName}</p>
		</div>
	</f:if>
	
This will output the company and the first and last name of the location.
 
 
