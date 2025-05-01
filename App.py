import streamlit as st
import pandas as pd
import numpy as np

# Streamlit app title
st.title("Al Rajhi Bank Survey AI Application")
st.title("NPS Scores")

# File uploader widget
uploaded_file = st.file_uploader("Upload your csv file", type=["csv", "csv"])

if uploaded_file is not None:
    try:
        # Read the Excel file
        df = pd.read_csv(uploaded_file)
        
        # Let user select the column for analysis
        st.subheader("---Choose column to get the counts---")
        NPS = st.selectbox("Choose the column containing scores", df.columns)
        
        # Ensure the selected column is numeric
        if df[NPS].dtype in [np.float64, np.int64,np.float32, np.int32]:
            # Count promoters (scores >= 9) and detractors (scores <= 6)
            detractor_count = (df[NPS] <= 6).sum()
            passive_count = ((df[NPS] == 7) | (df[NPS] == 8)).sum() 
            promoter_count = (df[NPS] >= 9).sum()
            overall_count = df[NPS].notnull().sum()
            # Display results
            st.subheader("Display Results:")
            st.write(f"Detractors Overall Counts: **{detractor_count}**")
            st.write(f"Passives Overall Counts: **{passive_count}**")
            st.write(f"Promoters Overall Counts: **{promoter_count}**")
            st.write(f"Total Counts: **{overall_count}**")
            
            
            # Optional: Display data preview
            st.subheader("Uploaded Data Preview")
            st.dataframe(df.head())
        else:
            st.error(f"Selected column '{NPS}' contains non-numeric data. Please choose a numeric column.")
            
    except Exception as e:
        st.error(f"Error processing file: {str(e)}")
else:
    st.info("Please upload an Excel file to find the counts for the Detractors, passives and promoters.")