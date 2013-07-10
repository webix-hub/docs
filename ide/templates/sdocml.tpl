<?xml version="1.0" encoding="UTF-8"?>
<javascript>
	<class type="webix">
	    <description>webix</description>
	    <constructors>
			<constructor scope="static">
		        <description>Creates new instance of webix.</description>
				<parameters>
		            <parameter name="parent" type="String" usage="required">
		            	<description>Object Constructor</description>
		            </parameter>
		            <parameter name="view" type="String" usage="required">
		            	<description>Common declaration</description>
		            </parameter>
		            <parameter name="skin" type="String" usage="required">
		            	<description>Nested layout</description>
		            </parameter>
		        </parameters>
		        <return-types>
		            <return-type type="webix"/>
		        </return-types>
		    </constructor>
	    </constructors>
	    <methods>
			<method name="ui" scope="instance">
				<description></description>
				<parameters>
					<parameter name="init" type="object" usage="required">
						<description>Webix initialization object</description>
					</parameter>
				</parameters>
				<return-types>
					#types#
		        </return-types>
				<example></example>
			</method>
		</methods>
	</class>
	<class type="$$">
		<constructors>
			<constructor scope="instance">
				<description>gets webix element by id</description>
				<parameters>
					<parameter name="id" type="String" usage="required">
		            	<description>webix element id</description>
		            </parameter>
		        </parameters>
				<return-types>
					#types#
				</return-types>
				<example></example>
			</constructor>
		</constructors>
	</class>
	#classes#
</javascript>