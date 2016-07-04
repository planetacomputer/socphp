<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <head>
    <link rel="stylesheet" href="colorbox.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jquery.colorbox.js"></script>
    <script>
      $(document).ready(function(){
        $(".iframe").colorbox({iframe:true, width:"95%", height:"95%"});
      });
    </script>
  </head>
  <body>
  <h2>Última hora</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th></th>
      <th>Categoria</th>
      <th>Hora</th>
      <th>Titular</th>
      <th>Descripcion</th>
    </tr>
    <xsl:for-each select="rss/channel/item[last()]">
    <tr>
      <td>
        <img>
        <xsl:attribute name="src">
          <xsl:value-of select="enclosure/@url"/>
        </xsl:attribute>
      </img>
    </td>
      <td><xsl:value-of select="category"/></td>
      <td><xsl:value-of select="pubDate"/></td>
      <td><xsl:value-of select="title"/></td>
      <td><xsl:value-of select="description"/>
      <a>
        <xsl:attribute name="href">
          <xsl:value-of select="link"/>
        </xsl:attribute>
         <xsl:attribute name="target">
          _blank
        </xsl:attribute>
        <xsl:attribute name="class">
          iframe
        </xsl:attribute>
        Leer mas
      </a>
      </td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>