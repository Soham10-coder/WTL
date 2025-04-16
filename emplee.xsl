<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <xsl:template match="/">
        <html>
        <body>

        <h2>Employee Info for (Salary > 30000 and Nickname contains 'Mandy')</h2>
        <table border="1">
        <tr bgcolor="#9acd32">
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nick Name</th>
            <th>Salary</th>
        </tr>
        <xsl:for-each select="class/employee[salary > 30000 and contains(nickname,'Mandy')]">
            <tr>
                <td><xsl:value-of select="@id"/></td>
                <td><xsl:value-of select="firstname"/></td>
                <td><xsl:value-of select="lastname"/></td>
                <td><xsl:value-of select="nickname"/></td>
                <td><xsl:value-of select="salary"/></td>
            </tr>
        </xsl:for-each>

        </table>

        <h2>Employee Info for (First Name = Kunal)</h2>
        <table border="1">
        <tr bgcolor="#ffcc00">
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nick Name</th>
            <th>Salary</th>
        </tr>
        <xsl:for-each select="class/employee[firstname='Kunal']">
            <tr>
                <td><xsl:value-of select="@id"/></td>
                <td><xsl:value-of select="firstname"/></td>
                <td><xsl:value-of select="lastname"/></td>
                <td><xsl:value-of select="nickname"/></td>
                <td><xsl:value-of select="salary"/></td>
            </tr>
        </xsl:for-each>

        </table>

        </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
