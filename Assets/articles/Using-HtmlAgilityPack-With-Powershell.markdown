# Using HtmlAgilityPack With Powershell

I started experimenting with using assemblies in the Powershell ISE, and just discovered an 
awesome way to grab HTML from a website using [HtmlAgilityPack](http://htmlagilitypack.codeplex.com)!!

Don't forget to include the full path to your assembly:

    [Reflection.Assembly]::LoadFile("C:\Users\...\...\Assemblies\HtmlAgilityPack.dll”)
    [HtmlAgilityPack.HtmlWeb]$web = @{}
    [HtmlAgilityPack.HtmlDocument]$doc = $web.Load("http://www.example.org")
    [HtmlAgilityPack.HtmlNodeCollection]$nodes = $doc.DocumentNode.SelectNodes("//meta")
    $nodes | ForEach-Object { $_.OuterHtml }

