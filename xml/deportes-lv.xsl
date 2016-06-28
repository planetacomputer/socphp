<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Deportes LV</h2>
    <table border="1">
      <tr bgcolor="blue">
        <th style="text-align:left">Titulo</th>
        <th style="text-align:left">Link</th>
      </tr>
      <xsl:for-each select="rss/channel/item">
      <tr>
        <td><h4>
          <a>
              <xsl:attribute name="href">
                <xsl:value-of select="link" />
              </xsl:attribute>
              <xsl:value-of select="title"/>
           </a>
        </h4><br/>
            <xsl:value-of select="description"/>
        </td>
        <td>
            <img>
              <xsl:attribute name="src">
                <xsl:value-of select="enclosure/@url" />
              </xsl:attribute>
            </img>
           
        </td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>

