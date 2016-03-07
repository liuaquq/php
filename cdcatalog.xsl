<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <h2>My CD Collection</h2>
	<img src="pic/guo.png"></img>
	<table border="1">
    <xsl:for-each select="lovelive/star">
	<tr>
		<th><xsl:value-of select="@name"></xsl:value-of></th>
		<th><img src="pic/<xsl:value-of select="@pic"></xsl:value-of>.png"  width="2550" height="3509"></th>
	</tr>
	</xsl:for-each>
	</table>
  </body>
  </html>
</xsl:template>
  
</xsl:stylesheet>
