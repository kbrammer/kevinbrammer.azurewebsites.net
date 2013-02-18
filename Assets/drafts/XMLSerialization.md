# XML Serialization

        //(public \w+\s)(\w+)(\s{ get; set; })
        //[XmlElement("$2")]\n\t\t$1$2$3

## [When to change the Generate Serialization Assembly value?](http://stackoverflow.com/questions/9187248/when-to-change-the-generate-serialization-assembly-value)

In order to serialize classes/structs, serialization assemblies need to be generated. This can happen at compiletime or runtime. Sgen.exe is used to generate serialization assemblies at compiletime; Visual Studio can optionally automate this process, as you have discovered.

- Off: Do not generate serialization assemblies at compiletime. Serialization assemblies will be generated each time the application runs, according to MSDN:
        
    When the XML Serializer Generator is not used, a XmlSerializer generates serialization code and a serialization assembly for each type every time an application is run. To improve the performance of XML serialization startup, use the Sgen.exe tool to generate those assemblies the assemblies in advance. These assemblies can then be deployed with the application.

- On: Use Sgen.exe to generate a serialization assembly at compiletime. This saves startup time, but increases deployment size.
- Auto: Default. Equates to Off, as far as I can tell.
    
So, my answer would be this: if you are concerned about startup time, and you use the Serializable attribute even once, set the option to On. If you are more concerned about deployment size, change it to Off. I never leave it on Auto anymore, because I don't trust it. Like I said, it seems to be the same as Off, but I wouldn't count on it.

## Reference
- [Compiling Web Application Projects](http://msdn.microsoft.com/en-us/library/aa983464(v=vs.80).aspx)
- [Shared Code Folders in ASP.NET Web Sites](http://msdn.microsoft.com/en-us/library/t990ks23(v=vs.80).aspx)